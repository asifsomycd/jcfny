<div class="layout-block__action-form" data-scroll>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 mt-lg-5 mb-3 mb-md-0 order-1 order-md-0">
        {!! $text !!}
      </div>

      <div class="layout-block__action-form__image col-12 col-md-4 mb-4 mb-lg-0 px-5 {{ $image_overlap ? 'with-overlap order-0 order-md-1 mb-5 mb-md-0' : 'd-none d-md-block' }}">
        <img src="{{ $image['sizes']['col-6'] }}" alt="{{ $image['alt'] }}">
      </div>

      <div class="col-12 col-md-4 mt-lg-5 order-3">
        {!! \App\get_form($form) !!}
      </div>
    </div>
  </div>
</div>
