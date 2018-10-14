<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ App\asset_path('images/favicons/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ App\asset_path('images/favicons/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ App\asset_path('images/favicons/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ App\asset_path('images/favicons/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ App\asset_path('images/favicons/safari-pinned-tab.svg') }}" color="#815c9e">
	<meta name="msapplication-TileColor" content="#815c9e">
	<meta name="theme-color" content="#815c9e">
	@php wp_head() @endphp
	@if ( $site_header_scripts )
		@foreach ( $site_header_scripts as $script )
			<!-- {{ $script['title'] }} -->
			{!! $script['script'] !!}
		@endforeach
	@endif
</head>
