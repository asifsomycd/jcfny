<div class="layout-block__text-and-photo position-relative d-flex flex-column" data-scroll>
  <div class="layout-block__text-and-photo_text container order-1 order-lg-0">
    <div class="row align-items-center">
      <div class="col-12 col-lg-4 font-size-md pt-lg-5 pb-5">
        <div class="wrapper">
          <div class="bg-white mt-n5 mt-lg-0 px-4 px-lg-0 pt-4 pt-lg-0">
            <h2>{!! $title !!}</h2>
            {!! $text !!}
          </div>

          <div class="text-center text-xl-left">
            @include('partials.acf-link', $button)

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

  <div class="layout-block__text-and-photo_container order-0 order-lg-1">
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
