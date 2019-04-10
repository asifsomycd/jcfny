<footer class="site-footer">
	<div class="container">
    <div class="row justify-content-between">
			<div class="col-12 col-lg-7 col-xl-6">

				<div class="row">
					<div class="col-6">
						<nav class="nav-footer nav-footer__1">
							<p><strong>About Us</strong></p>
							@if ( has_nav_menu( 'footer_1_navigation' ) )
								{!! wp_nav_menu( [ 'theme_location' => 'footer_1_navigation', 'menu_class' => 'nav' ] ) !!}
							@endif
            </nav>
					</div>

					<div class="col-6">
						<nav class="nav-footer nav-footer__2">
							<p><strong>Specialized Funds</strong></p>
							@if ( has_nav_menu( 'footer_2_navigation' ) )
								{!! wp_nav_menu( [ 'theme_location' => 'footer_2_navigation', 'menu_class' => 'nav' ] ) !!}
							@endif
						</nav>
					</div>
				</div>

			</div>

			<div class="col-12 col-lg-5 col-xl-auto mt-5 mt-lg-0">
				<div class="footer-form d-none d-md-block">
					@include('partials.action-form', [
						'form_display' => 'inline',
					] )
				</div>

        <div class="social">
          <small>
            @if ( $site_social )
              @foreach ( $site_social as $social )
                <a href="{{ $social['url'] }}" title="{{ $social['network'] }}" target="_blank" rel="nofollow">
                  <i class="fab fa-{{ $social['icon'] }} fa-2x fa-fw"></i>
                </a>
              @endforeach
            @endif
          </small>
        </div>

			</div>
    </div>

    <!--IXF: The following <div> block needs to be placed in the location where the link equity block will be displayed-->
    <div class="be-ix-link-block"><!--Link Equity Target Div--></div>
    <!--IXF: end-->

		<div id="colophon">
			&copy; {{ date( 'Y' ) }} {!! $site_name !!}
			@if ( has_nav_menu( 'colophon_navigation' ) )
				{!! wp_nav_menu( [ 'theme_location' => 'colophon_navigation', 'menu_class' => 'nav' ] ) !!}
			@endif
			<div class="trust-e d-inline-block pl-md-3">
				<a href="//privacy.truste.com/privacy-seal/validation?rid=d6cbd88e-e7c6-4238-8ab5-6a1d7adf5405" target="_blank"><img style="border: none" src="//privacy-policy.truste.com/privacy-seal/seal?rid=d6cbd88e-e7c6-4238-8ab5-6a1d7adf5405" alt="TRUSTe"/></a>
			</div>
		</div>
	</div>
</footer>

@if ( $show_footer_form )
	<div class="sticky-footer__wrap d-none d-lg-block">
		<footer class="sticky-footer">
			<div class="container">
				@include('partials.action-form', [
					'form_display' => 	'inline',
					'is_sticky' => 		true,
				] )
			</div>
		</footer>
	</div>
@endif

@if ( $page_scripts )
	@foreach ( $page_scripts as $script )
		<!-- {{ $script['title'] }} -->
		{!! $script['script'] !!}
	@endforeach
@endif

@if ( $site_footer_scripts )
	@foreach ( $site_footer_scripts as $script )
		<!-- {{ $script['title'] }} -->
		{!! $script['script'] !!}
	@endforeach
@endif
