<div class="layout-block__text-and-photo position-relative d-flex flex-column" data-scroll>
  <div class="layout-block__text-and-photo_text container order-1 order-lg-0">
    <div class="
      row align-items-center
      {{ $image_options['position'] === 'left' ? 'justify-content-end' : 'justify-content-start' }}
    ">
      <div class="
        col-12 font-size-md pt-lg-5 pb-5
        {{ $image_options['width'] === '7' ? 'col-lg-4' : 'col-lg-5' }}
      ">
        <div class="wrapper">
          <div class="bg-white mt-n5 mt-lg-0 px-4 px-lg-0 pt-4 pt-lg-0">
            <{{ $h1 ? 'h1' : 'h2' }}>
              {!! $title !!}
            </{{ $h1 ? 'h1' : 'h2' }}>
            {!! $text !!}
          </div>

          <div class="text-center text-xl-left">
            @include('partials.acf-link', $button)

            @if ($video_modal['video_id'])
              <div class="d-xl-none"><br></div>

              @include('partials.modal-video', [
                'button_classes' => 'acf-link link-dark-turquoise link-underline ml-xl-5',
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
      <div class="
        row h-100
        {{ $image_options['position'] === 'left' ? 'justify-content-start' : 'justify-content-end' }}
      ">
        <div class="
            layout-block__text-and-photo_block col-12 h-100
            {{ $image_options['width'] === '7' ? 'col-lg-7' : 'col-lg-6' }}
            {{ $image_options['fit'] === 'cover' ? 'photo--cover' : 'photo--contain' }}
          "
          style="background-image: url({{ $image['sizes']['col-6'] }});"
        ></div>
      </div>
    </div>
  </div>
</div>
