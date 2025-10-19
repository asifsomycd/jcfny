#!/bin/bash

# https://discourse.roots.io/t/script-update-wordpress-core-and-plugins-without-touching-other-dependencies/29008

# Step 1: Extract package names into a variable
PACKAGES=$(jq -r '.packages[] | select(.type == "wordpress-plugin" or .type == "wordpress-muplugin") | .name' ../composer.lock)

# Step 2: Echo the packages to the console
echo "The following packages will be updated to their latest versions:"
echo "$PACKAGES"

# Step 3: Require all WordPress plugins and the core
composer require roots/wordpress $(echo "$PACKAGES") --with-all-dependencies
