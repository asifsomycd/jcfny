<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ home_url('/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ home_url('/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ home_url('/favicons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ home_url('/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ home_url('/favicons/safari-pinned-tab.svg') }}" color="#230761">
  <link rel="shortcut icon" href="{{ home_url('/favicons/favicon.ico') }}">
  <meta name="msapplication-TileColor" content="#e8effa">
  <meta name="msapplication-config" content="{{ home_url('/browserconfig.xml') }}">
  <meta name="theme-color" content="#ffffff">

	@php wp_head() @endphp
	@if ( $site_header_scripts )
		@foreach ( $site_header_scripts as $script )
			<!-- {{ $script['title'] }} -->
			{!! $script['script'] !!}
		@endforeach
	@endif
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TX8XFBZ');</script>
	<!-- End Google Tag Manager -->
  {{-- IXF --}}
  {!! $brightedge_head !!}
</head>
