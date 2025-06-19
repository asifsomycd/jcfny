<div
  class="layout-block__title-and-text
    {{ !$area['arrows'] || $disable_parallax_backgrounds ? 'skip-parallax' : '' }}
  "
  data-enllax-ratio="-0.1"
  data-enllax-background-align="right"
  @if ($index > 0) data-scroll @endif
>
  <div class="container py-3">
    <div class="row">
      <div class="col-12 col-lg-4">
        <{{ $area['h1'] ? 'h1' : 'h2' }}>{!! $area['title'] !!}</{{ $area['h1'] ? 'h1' : 'h2' }}>
      </div>

      <div class="col-12 col-lg-5 offset-lg-2 font-size-md">
        {!! $area['text'] !!}

        <div class="text-center text-xl-left">
          @if ($area['button'])
            @include('partials.acf-link', $area['button'])
          @endif

          @if ($area['video_modal']['video_id'])
            <div class="d-xl-none"><br></div>

            @include('partials.modal-video', [
                'button_classes' => 'acf-link link-dark-turquoise link-underline ml-xl-5',
                'button_text' => $area['video_modal']['text'],
                'video_id' => $area['video_modal']['video_id'],
                'modal_id' => 'video-headline-' . $area['video_modal']['video_id'],
            ])
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
