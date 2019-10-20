<footer class="site-footer">
	<div class="container">
    <div class="row justify-content-between">
			<div class="col-12 col-lg-8">
				<div class="row">
					<div class="col-4">
            @include('partials.nav-footer-1')
					</div>

					<div class="col-4">
            @include('partials.nav-footer-2')
          </div>

          <div class="col-4">
            @include('partials.brightedge')
          </div>
				</div>
			</div>

			<div class="col-12 col-lg-auto mt-5 mt-lg-0">
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

        <div>
          @if($action_buttons['secondary'])
            @include('partials.acf-link', array_merge(
              $action_buttons['secondary'],
              [
                'class' => 'btn btn-tealish w-100',
              ])
            )
          @endif
				</div>

        @include('partials.social')
			</div>
    </div>

		@include('partials.colophon')
	</div>
</footer>
