<div class="layout-block__action-form" data-scroll>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 mb-4 mb-md-0 mt-5">
        <h2>{!! $title !!}</h2>
        {!! $text !!}
      </div>

      <div class="layout-block__action-form__image col-12 col-md-4 mb-4 mb-lg-0 px-5">
        <img src="{{ $image['sizes']['col-6'] }}" alt="{{ $title }}">
      </div>

      <div class="col-12 col-md-4 mt-5">
        {!! \App\get_form($form) !!}
      </div>
    </div>
  </div>
</div>
