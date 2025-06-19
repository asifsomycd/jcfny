<head>
  <meta charset="utf-8">
  <meta
    http-equiv="x-ua-compatible"
    content="ie=edge"
  >
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
  >
  <link
    href="{{ home_url('/favicons/apple-touch-icon.png') }}"
    rel="apple-touch-icon"
    sizes="180x180"
  >
  <link
    type="image/png"
    href="{{ home_url('/favicons/favicon-32x32.png') }}"
    rel="icon"
    sizes="32x32"
  >
  <link
    type="image/png"
    href="{{ home_url('/favicons/favicon-16x16.png') }}"
    rel="icon"
    sizes="16x16"
  >
  <link
    href="{{ home_url('/site.webmanifest') }}"
    rel="manifest"
  >
  <link
    href="{{ home_url('/favicons/safari-pinned-tab.svg') }}"
    rel="mask-icon"
    color="#230761"
  >
  <link
    href="{{ home_url('/favicons/favicon.ico') }}"
    rel="shortcut icon"
  >
  <meta
    name="msapplication-TileColor"
    content="#e8effa"
  >
  <meta
    name="msapplication-config"
    content="{{ home_url('/browserconfig.xml') }}"
  >
  <meta
    name="theme-color"
    content="#ffffff"
  >
  <link
    type="font/woff2"
    href="https://fonts.gstatic.com/s/rubik/v30/iJWKBXyIfDnIV7nBrXyw023e.woff2"
    rel="preload"
    as="font"
    crossorigin="anonymous"
  >
  <link
    type="font/woff2"
    href="https://fonts.gstatic.com/s/rubik/v30/iJWEBXyIfDnIV7nEnX661E_c5Ig.woff2"
    rel="preload"
    as="font"
    crossorigin="anonymous"
  >

  @php wp_head() @endphp

  @if ($site_header_scripts)
    @foreach ($site_header_scripts as $script)
      {!! $script['script'] !!}
    @endforeach
  @endif

  {{-- Google Tag Manager --}}
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TX8XFBZ');
  </script>

  {{-- IXF --}}
  {!! $brightedge_head !!}
</head>
