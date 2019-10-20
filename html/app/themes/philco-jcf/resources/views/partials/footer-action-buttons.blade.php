<footer class="site-footer">
	<div class="container">
    <div class="row justify-content-between">
			<div class="col-12 col-lg-8 order-1 order-lg-0">
				<div class="row">
					<div class="col-6 col-lg-4">
            @include('partials.nav-footer-1')
					</div>

					<div class="col-6 col-lg-4">
            @include('partials.nav-footer-2')
          </div>

          <div class="col-12 col-lg-4">
            @include('partials.brightedge')
          </div>
				</div>
			</div>

			<div class="col-12 col-lg-auto mb-5 mb-lg-0 order-0 order-lg-1">
				<div class="mb-4">
          @if($action_buttons['primary'])
            @include('partials.acf-link', array_merge(
              $action_buttons['primary'],
              [
                'class' => 'btn btn-primary w-100',
              ])
            )
          @endif
        </div>

        <div class="mb-5 mb-lg-0">
          @if($action_buttons['secondary'])
            @include('partials.acf-link', array_merge(
              $action_buttons['secondary'],
              [
                'class' => 'btn btn-tealish w-100',
              ])
            )
          @endif
				</div>

        <div class="py-3 py-lg-0 text-center text-lg-left">
          @include('partials.social')
        </div>
			</div>
    </div>

		@include('partials.colophon')
	</div>
</footer>
