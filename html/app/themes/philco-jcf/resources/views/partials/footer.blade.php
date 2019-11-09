@switch($footer_nav_type)
  @case('action-buttons')
    @include('partials.footer-action-buttons')
    @break

  @default
    @include('partials.footer-default')
@endswitch

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
