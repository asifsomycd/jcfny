<div class="layout-block__title-and-text {{ !$arrows ? 'without-arrows' : '' }}" {!! $arrows ? 'data-enllax-ratio="-0.1" data-enllax-background-align="right"' : '' !!} data-scroll>
  <div class="container py-3">
    <div class="row">
      <div class="col-12 col-lg-4">
        <h2 class="fix-widow-skip">{!! $title !!}</h2>
      </div>

      <div class="col-12 col-lg-5 offset-lg-2 font-size-md">
        {!! $text !!}

        <div class="text-center text-xl-left">
          @if($button)
            @include('partials.acf-link', $button)
          @endif

          @if($video_modal['video_id'])
            <div class="d-xl-none"><br></div>

            @include('partials.modal-video', [
              'button_classes' => 'acf-link link-tealish link-underline ml-xl-5',
              'button_text' => $video_modal['text'],
              'video_id' => $video_modal['video_id'],
              'modal_id' => 'video-headline-' . $video_modal['video_id'],
            ])
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
