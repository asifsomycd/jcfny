@if (! $faqs)
  @php return; @endphp
@endif

<div class="layout-block__faq" data-enllax-ratio="-0.1" data-enllax-background-align="left" data-scroll>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <h2>{!! $title !!}</h2>
      </div>

      <div class="col-12 col-lg-8">
        <div id="faqs">
          @foreach ($faqs as $faq)
            <div class="faq">
              <div class="faq__question">
                <a class="btn btn-link" href="{{ $faq['link'] }}">
                  <div class="row">
                    <div class="col-auto pr-0">
                      <div class="faq__indicator fa-fw">
                        <i class="far fa-fw fa-sm fa-arrow-right"></i>
                      </div>
                    </div>
                    <div class="col pl-0">
                      {!! $faq['title'] !!}
                    </div>
                  </div>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
