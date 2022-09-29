<div class="layout-block__headline
    {{ $disable_parallax_backgrounds ? 'skip-parallax' : '' }}
  "
  data-enllax-ratio="-0.1" data-enllax-background-align="right"
  data-scroll
>
  <div class="content container">
    <div class="row justify-content-between">
      <main class="main col-12">
        <h1 class="entry-title">
          {!! $title !!}
        </h1>
        @if ($subtitle)
          <span class="h1 entry-subtitle mb-4 d-block">
            {!! $subtitle !!}
          </span>
        @endif
        <div class="entry-content lead row justify-content-between align-items-center">
          <div class="col-12 col-md-8 col-lg-6 entry-content__text">
            {!! $text !!}
          </div>

          <div class="layout-block__headline_cta col-12 col-lg-4 text-center text-lg-left">
            @include('partials.acf-link', array_merge([
              'class' => 'btn btn-tealish',
            ], $button))

            @if ($video_modal['video_id'])
              <div class="d-xl-none"><br></div>

              @include('partials.modal-video', [
                'button_classes' => 'acf-link btn btn-outline-tealish ml-xl-5',
                'button_text' => $video_modal['text'],
                'video_id' => $video_modal['video_id'],
                'modal_id' => 'video-headline-' . $video_modal['video_id'],
              ])
            @endif
          </div>
        </div>
      </main>
    </div>
  </div>
</div>
