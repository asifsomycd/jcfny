@switch($footer_nav_type)
  @case('action-buttons')
    @include('partials.footer-action-buttons')
  @break

  @default
    @include('partials.footer-default')
@endswitch

{{--
  Client wishes to remove the sticky footer form globally.
  Removed the option from ACF and leaving this code here should
  they want to reinstate it in the future.
--}}
{{--
@if ($show_footer_form)
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
--}}

@if ($page_scripts)
  @foreach ($page_scripts as $script)
    <!-- {{ $script['title'] }} -->
    {!! $script['script'] !!}
  @endforeach
@endif

@if ($site_footer_scripts)
  @foreach ($site_footer_scripts as $script)
    <!-- {{ $script['title'] }} -->
    {!! $script['script'] !!}
  @endforeach
@endif

{{-- CobrowseIO --}}
<script>
  (function(w, t, c, p, s, e) {
    p = new Promise(function(r) {
      w[c] = {
        client: function() {
          if (!s) {
            s = document.createElement(t);
            s.src = 'https://js.cobrowse.io/CobrowseIO.js';
            s.async = 1;
            s.crossOrigin = 'anonymous';
            e = document.getElementsByTagName(t)[0];
            e.parentNode.insertBefore(s, e);
            s.onload = function() {
              r(w[c]);
            };
          }
          return p;
        }
      };
    });
  })(window, 'script', 'CobrowseIO');

  CobrowseIO.license = "ePDRGFQYbpzy0Q";
  CobrowseIO.client().then(function() {
    CobrowseIO.start();
  });
</script>

{{-- Pop-Up modals --}}
@if (!$popups || isset($application_form))
  @php return; @endphp
@endif

@foreach ($popups as $popup)
  @section('modal-body')
    {!! apply_filters('the_content', $popup->post_content) !!}
  @overwrite

  @section('modals')
    @parent

    @include('partials.modal', [
        'type' => 'popup',
        'class' => 'popup-' . $popup->key,
        'background' => $popup->modal_bg ?: '#fff',
        'title' => '', // $popup->post_title,
        'options' => $popup->options,
    ])
  @endsection
@endforeach
