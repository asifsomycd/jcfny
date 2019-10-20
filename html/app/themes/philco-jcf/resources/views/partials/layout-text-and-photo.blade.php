<div class="layout-block__text-and-photo position-relative" data-scroll>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-4 font-size-md pt-5 pb-5">
        <div class="wrapper">
          <h2>{!! $title !!}</h2>
          {!! $text !!}
          @include('partials.acf-link', $button)

          @if($video_modal['video_id'])
            <div class="d-sm-none"><br></div>

            @include('partials.modal-video', [
              'button_classes' => 'acf-link link-tealish link-underline ml-sm-5',
              'button_text' => $video_modal['text'],
              'video_id' => $video_modal['video_id'],
              'modal_id' => 'video-headline-' . $video_modal['video_id'],
            ])
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="layout-block__text-and-photo_container">
    <div class="container-fluid h-100">
      <div class="row h-100 justify-content-end">
        <div class="layout-block__text-and-photo_block col-12 col-lg-7 h-100" style="background-image: url({{ $image['sizes']['col-6'] }});"></div>
      </div>
    </div>
  </div>
</div>



<div class="layout-block__text-and-photo" data-enllax-ratio="-0.1" data-enllax-background-align="right" data-scroll>
  <div class="content container">
    <div class="row justify-content-between">
      <main class="main col-12">
        <div class="entry-content lead row justify-content-between align-items-center">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          </div>

          <div class="layout-block__text-and-photo_cta col-12 col-lg-4 text-center text-lg-left">

          </div>
        </div>
      </main>
    </div>
  </div>
</div>
