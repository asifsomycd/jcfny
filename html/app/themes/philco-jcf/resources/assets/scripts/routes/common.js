import '../util/jquery.enllax';
import 'imagesloaded';
import ScrollOut from 'scroll-out';
import CountUp from 'countup.js';
import '../util/ios';
import pushHistory from '../util/pushHistory';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Attempt to automatically remove text widows from headings
    // Replaces the last space in a heading with non-breaking space
    // Add data-widow-skip to any heading to skip processing

    $('h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6')
      .not('.fix-widow-skip')
      .each((i, el) =>
        $(el).html(function() {
          return $(this)
            .html()
            .replace(/\s([^\s<]+)\s*$/, '\u00A0$1');
        })
      );

    // Enllax (parallax)

    $('.wrap').imagesLoaded(
      {
        background: true,
      },
      () => {
        $(window).enllax();
      }
    );

    $(window).on('window:resize', () => {
      if ($('.background-arrows').length) {
        $('.background-arrows').css({
          right: (window.innerWidth - $('.wrap .content')[0].clientWidth) / 2,
          opacity: 1,
        });
      }
    });

    // Nav

    $('.nav-top .menu-item:not(.search-link)')
      .last()
      .addClass('tagged')
      .find('a')
      .on('click', function() {
        $(this)
          .width($(this).width())
          .html('<i class="far fa-fw fa-spinner-third fa-spin"></i> Loading');
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    // Animation; elements with data-scroll
    // Count up numbers if needed

    ScrollOut({
      onShown: el => {
        $(el).addClass('fadeInUp animated');

        if ($(el).hasClass('count-up')) {
          let $countTarget = $(el).find('.count-up-target');
          let countEnd = $countTarget.attr('data-end');
          let countDecimals = 0;

          if (countEnd < 20) {
            countDecimals = 1;
            countEnd = countEnd - 0.1;
          }

          let countThis = new CountUp($countTarget[0], 0, countEnd, countDecimals, 3);

          setTimeout(
            () =>
              countThis.start(() => {
                if (countDecimals > 0) {
                  $countTarget.text(countEnd + 0.1);
                }

                $(el).removeClass('count-up');
              }),
            750
          );
        }
      },
      once: true,
      threshold: 0.2,
    });

    // Move search link into place

    $('.site-header .search-link')
      .appendTo('#menu-top-navigation')
      .show();

    // Sticky header and footer

    // Clone header

    $('.site-header .nav-top')
      .clone()
      .appendTo('.sticky-header__nav-top');
    $('.site-header .nav-primary')
      .clone()
      .appendTo('.sticky-header__nav-primary');

    // Hide just off screen

    $('.sticky-header').css({
      top: -$('.sticky-header').outerHeight(),
    });

    $('.sticky-footer').css({
      bottom: -$('.sticky-footer').outerHeight(),
    });

    // Hide sticky-footer when footer comes into view

    ScrollOut({
      onHidden: () => {
        $('.sticky-footer').addClass('in');
      },
      onShown: () => {
        $('.sticky-footer').removeClass('in');
      },
      targets: '.site-footer',
    });

    // Show/hide sticky-header/footer when header leaves view

    ScrollOut({
      onHidden: () => {
        $('.sticky-header').addClass('in');
        if ($('.site-footer').attr('data-scroll') === 'out') {
          $('.sticky-footer').addClass('in');
        }
        // $( '.sticky-footer__wrap' ).height( $( '.sticky-footer' ).outerHeight() );
      },
      onShown: () => {
        $('.sticky-header').removeClass('in');
        $('.sticky-footer').removeClass('in');
      },
      targets: '.site-header',
      threshold: 0.1,
    });

    // Mobile header (fixed)

    $(window).on('window:resize', () => {
      $('.share .position-sticky').css({
        top: $('.sticky-header').outerHeight() + 16,
      });

      if (window.innerWidth <= window.jcf.breakpointXl) {
        $('body').css({
          marginTop: $('.sticky-header').height(),
        });
      } else {
        $('body').css({
          marginTop: 0,
        });
      }
    });

    // Mobile nav

    // Find last menu item (contact us), make it a button and move to top

    $('.nav-mobile__top .menu-item')
      .not('.search-link')
      .last()
      .find('a')
      .addClass('btn btn-outline-light')
      .insertBefore('.nav-modal .nav-mobile__top');

    $('.nav-mobile__top .menu-item:empty').remove();

    // Add arrows to items with dropdowns

    $('.nav-mobile__primary .menu-item-has-children > a').append($('<div class="nav-arrow"><i class="fal fa-chevron-down"></i></div>'));

    // Show/hide submenus

    $('.nav-mobile__primary .menu-item-has-children > a').on('click', function(e) {
      e.preventDefault();

      if (
        $(this)
          .parent()
          .hasClass('active')
      ) {
        $(this)
          .next('.sub-menu')
          .stop()
          .slideUp();
        $(this)
          .parent()
          .removeClass('active');
      } else {
        $('.nav-mobile__primary .menu-item-has-children.active')
          .removeClass('active')
          .find('.sub-menu')
          .stop()
          .slideUp();
        $(this)
          .parent()
          .addClass('active');
        $(this)
          .next('.sub-menu')
          .stop()
          .slideDown();
      }
    });

    // Modal -- Video

    $('.modal--iframe-video').on('show.bs.modal', function() {
      // set the video to src
      $('.modal--iframe-video iframe').attr('src', $('.modal--iframe-video iframe').data('src'));
    });

    $('.modal--iframe-video').on('hidden.bs.modal', function() {
      // on closing the modal
      // stop the video
      $('.modal--iframe-video iframe').attr('src', null);
    });

    // Modal -- Search

    $('.modal--search').on('show.bs.modal', function() {
      // Close all other modals
      $('.modal')
        .not($(this))
        .each(function() {
          $(this).modal('hide');
        });
    });

    $('.modal--search').on('shown.bs.modal', function() {
      // focus input
      $('.modal--search .search-field').focus();
    });

    // .collapsible pushState

    $('.collapsible__trigger').on('click', function() {
      let targetHash = $(this)
          .find('.btn')
          .data('target'),
        $trigger = $(this).find('.btn'),
        locationHref = window.location.href;

      if (window.location.hash) {
        locationHref = locationHref.replace(window.location.hash, '');
      }

      if (typeof targetHash === 'undefined') {
        targetHash = '';
      }

      pushHistory(locationHref + targetHash, $.trim($trigger.text()) + ' | ' + window.jcf.siteTitle, $trigger.attr('href'));
    });

    // Expand .collapsible on page load

    let $collapsibleTrigger = $('.collapsible__trigger a[href="' + window.location.hash + '"]');

    if (window.location.hash && $collapsibleTrigger.length) {
      $collapsibleTrigger.trigger('click');
    }

    setTimeout(
      () =>
        $(window)
          .scroll()
          .trigger('window:resize'),
      250
    );

    $(window).resize(() => $(window).trigger('window:resize'));
  },
};
