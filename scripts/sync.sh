#!/bin/bash

# Syncing Trellis & Bedrock-based WordPress environments with WP-CLI aliases
# Version 1.1.0
# Copyright (c) Ben Word

DEVDIR="html/app/uploads/"
DEVSITE="https://jcfny.test"

PRODDIR="jcfny:/home/jcfnyorg/jcfny.org/html/app/uploads/"
PRODSITE="https://jcfny.org"

STAGDIR="jcfny:/home/jcfnyorg/jcfny.org/html/app/uploads/"
STAGSITE="https://jcfny.org"

FROM=$1
TO=$2
LOCAL=false

if [[ $3 == "--local" ]]; then
  LOCAL=true
fi

bold=$(tput bold)
normal=$(tput sgr0)

case "$1-$2" in
  production-development) DIR="down ⬇️ "          FROMSITE=$PRODSITE; FROMDIR=$PRODDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;
  staging-development)    DIR="down ⬇️ "          FROMSITE=$STAGSITE; FROMDIR=$STAGDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;
  development-production) DIR="up ⬆️ "            FROMSITE=$DEVSITE;  FROMDIR=$DEVDIR;  TOSITE=$PRODSITE; TODIR=$PRODDIR; ;;
  development-staging)    DIR="up ⬆️ "            FROMSITE=$DEVSITE;  FROMDIR=$DEVDIR;  TOSITE=$STAGSITE; TODIR=$STAGDIR; ;;
  production-staging)     DIR="horizontally ↔️ ";  FROMSITE=$PRODSITE; FROMDIR=$PRODDIR; TOSITE=$STAGSITE; TODIR=$STAGDIR; ;;
  staging-production)     DIR="horizontally ↔️ ";  FROMSITE=$STAGSITE; FROMDIR=$STAGDIR; TOSITE=$PRODSITE; TODIR=$PRODDIR; ;;
  *) echo "usage: $0 production development | staging development | development staging | development production | staging production | production staging" && exit 1 ;;
esac

read -r -p "
🔄  Would you really like to ⚠️  ${bold}reset the $TO database${normal} ($TOSITE)
    and sync ${bold}$DIR${normal} from $FROM ($FROMSITE)? [y/N] " response

if [[ "$response" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  # Change to site directory
  cd ../ &&
  echo

  # Make sure both environments are available before we continue
  availfrom() {
    local AVAILFROM

    if [[ "$LOCAL" = true && $FROM == "development" ]]; then
      AVAILFROM=$(wp option get home 2>&1)
    else
      AVAILFROM=$(wp "@$FROM" option get home 2>&1)
    fi
    if [[ $AVAILFROM == *"Error"* ]]; then
      echo "❌  Unable to connect to $FROM"
      exit 1
    else
      echo "✅  Able to connect to $FROM"
    fi
  };
  availfrom

  availto() {
    local AVAILTO
    if [[ "$LOCAL" = true && $TO == "development" ]]; then
      AVAILTO=$(wp option get home 2>&1)
    else
      AVAILTO=$(wp "@$TO" option get home 2>&1)
    fi

    if [[ $AVAILTO == *"Error"* ]]; then
      echo "❌  Unable to connect to $TO"
      exit 1
    else
      echo "✅  Able to connect to $TO"
    fi
  };
  availto
  echo

  # Export/import database, run search & replace
  if [[ "$LOCAL" = true && $TO == "development" ]]; then
    wp db export &&
    wp db reset --yes &&
    wp "@$FROM" db export - | wp db import - &&
    wp search-replace "$FROMSITE" "$TOSITE"
  elif [[ "$LOCAL" = true && $FROM == "development" ]]; then
    wp "@$TO" db export &&
    wp "@$TO" db reset --yes &&
    wp db export - | wp "@$TO" db import - &&
    wp "@$TO" search-replace "$FROMSITE" "$TOSITE"
  else
    wp "@$TO" db export &&
    wp "@$TO" db reset --yes &&
    wp "@$FROM" db export - | wp "@$TO" db import - &&
    wp "@$TO" search-replace "$FROMSITE" "$TOSITE"
  fi

  # Sync uploads directory
  chmod -R 755 html/app/uploads/ &&
  if [[ $DIR == "horizontally"* ]]; then
    [[ $FROMDIR =~ ^(.*): ]] && FROMHOST=${BASH_REMATCH[1]}
    [[ $FROMDIR =~ ^(.*):(.*)$ ]] && FROMDIR=${BASH_REMATCH[2]}
    [[ $TODIR =~ ^(.*): ]] && TOHOST=${BASH_REMATCH[1]}
    [[ $TODIR =~ ^(.*):(.*)$ ]] && TODIR=${BASH_REMATCH[2]}

    ssh -o ForwardAgent=yes $FROMHOST "rsync -aze 'ssh -o StrictHostKeyChecking=no' --progress $FROMDIR $TOHOST:$TODIR --exclude 'backupbuddy_backups'"
  else
    rsync -az --progress --exclude 'backupbuddy_backups' "$FROMDIR" "$TODIR"
  fi

  # Slack notification when sync direction is up or horizontal
  # if [[ $DIR != "down"* ]]; then
  #   USER="$(git config user.name)"
  #   curl -X POST -H "Content-type: application/json" --data "{\"attachments\":[{\"fallback\": \"\",\"color\":\"#36a64f\",\"text\":\"🔄 Sync from ${FROMSITE} to ${TOSITE} by ${USER} complete \"}],\"channel\":\"#site\"}" https://hooks.slack.com/services/xx/xx/xx
  # fi

  # Deactivate production plugins
  wp @development plugin deactivate autoptimize backupbuddy sucuri-scanner wp-super-cache
  git checkout html/app/advanced-cache.php
  git checkout html/app/wp-cache-config.php

  echo -e "\n\n🔄  Sync from $FROM to $TO complete.\n\n    ${bold}$TOSITE${normal}\n"
fi
