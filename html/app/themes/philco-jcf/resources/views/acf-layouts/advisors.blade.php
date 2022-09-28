<div class="layout-block__advisors position-relative
    {{ $disable_parallax_backgrounds ? 'skip-parallax' : '' }}
  "
  data-enllax-ratio="0.1" data-enllax-background-align="right"
  data-scroll
>
  <div class="parallax-badge d-none d-md-block" data-enllax-ratio="-0.1"></div>
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 font-size-md">
        {!! $text !!}
      </div>
      <div class="col-12 text-center text-lg-left">
        @include('partials.acf-link', $button)
        <div class="d-lg-none"><br></div>
        @include('partials.acf-link', array_merge(
          $link,
          ['class' => 'link-dark-turquoise link-underline ml-lg-5']
        ))
      </div>
    </div>
  </div>
</div>
