<footer class="site-footer">
	<div class="container">
    <div class="row justify-content-between">
			<div class="col-12 col-lg-7 col-xl-6">

				<div class="row">
					<div class="col-6">
						@include('partials.nav-footer-1')
					</div>

					<div class="col-6">
						@include('partials.nav-footer-2')
					</div>
				</div>

			</div>

			<div class="col-12 col-lg-5 col-xl-6 mt-5 mt-lg-0">
        @if ($show_footer_form && ! isset($application_form))
          <div class="footer-form d-none d-md-block mb-md-5">
            @include('partials.action-form', [
              'form_display' => 'inline',
            ] )
          </div>
        @endif

        @include('partials.social')
			</div>
    </div>

    @include('partials.brightedge')

    @include('partials.colophon')
	</div>
</footer>
