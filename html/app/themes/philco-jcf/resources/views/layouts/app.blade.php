<!doctype html>
<html {!! get_language_attributes() !!}>
	@include('partials.head')
  <body {{ body_class() }}>
    {{-- IXF --}}
    {!! $brightedge_body !!}

		<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX8XFBZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		@php do_action('get_header') @endphp

    @include('partials.announcement-bar')
		@include('partials.header')

    <div class="hfeed">
			@yield('background-arrows')
			@yield('post-header')
			@section('wrap-container')
				<div class="wrap container" role="document">
					<div class="content">
						<div class="row justify-content-between">
							<main class="main col-12 @if ( App\display_sidebar() ) col-lg-7 offset-lg-1 @endif">
								@yield('content')
							</main>
							@if ( App\display_sidebar() )
								<aside class="sidebar col-12 col-lg-4">
									@include('partials.sidebar')
								</aside>
							@endif
						</div>
					</div>
				</div>
			@show
		</div>
		@php do_action('get_footer') @endphp
		@include('partials.footer')
		@yield('modals')
		@php wp_footer() @endphp
	</body>
</html>
