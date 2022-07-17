<div
  class="
    modal fade
    {{ $class ?? '' }}
    modal--{{ $type ?? 'default' }}
  "
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal--{{ $type ?? 'default' }}"
  aria-hidden="true"
  {!! isset($options) ? 'data-options=\'' . $options . '\'' : '' !!}
>
  <div class="
    modal-dialog
    {{ isset($type) && $type === 'iframe-video' ? 'modal-lg' : '' }}
    {{ isset($type) && $type === 'popup' ? 'modal-dialog-centered' : '' }}
  ">
    <div class="modal-content">
      <div class="modal-header" id="modal--{{ $type ?? 'default' }}">
        @if (isset($title))
          <h5 class="modal-title">{{ $title }}</h5>
        @endif

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fal fa-lg fa-times"></i>
        </button>
      </div>

      <div class="modal-body">
        @yield('modal-body')
      </div>
    </div>
  </div>
</div>
