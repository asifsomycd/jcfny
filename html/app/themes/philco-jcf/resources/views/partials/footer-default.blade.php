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

        <div class="row flex-lg-wrap flex-xl-nowrap mb-3">
          @if ($footer_action_buttons && ! isset($application_form))
            <div class="col-12 col-sm-6 col-lg-12 col-xl-6 mb-4 nav-footer">
              <div class="pr-md-5">
                <p class="text-tealish mb-3">
                  <strong>{!! $footer_action_buttons['heading'] !!}</strong>
                </p>

                @foreach ($footer_action_buttons['buttons'] as $item)
                  <p>
                    @include('partials.link', array_merge(
                      [
                        'class' => 'btn ' . ($loop->first ? 'btn-primary' : 'btn-tealish'),
                      ],
                      $item['link']
                    ))
                  </p>
                @endforeach
              </div>
            </div>
          @endif

          <div class="col-12 col-sm-6 col-lg-12 col-xl-6  nav-footer">
            <p class="mb-3">
              <strong>Follow Us</strong>
            </p>
            @include('partials.social')
          </div>
        </div>
			</div>
    </div>

    @include('partials.brightedge')

    @include('partials.colophon')
	</div>
</footer>
