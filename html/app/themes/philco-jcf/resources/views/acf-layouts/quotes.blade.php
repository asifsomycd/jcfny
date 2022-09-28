@if(! $quotes)
  @php return; @endphp
@endif

<div class="layout-block__quote
    {{ $disable_parallax_backgrounds ? 'skip-parallax' : '' }}
  "
  data-enllax-ratio="-0.2" data-enllax-background-align="right"
  data-scroll
>
  <div id="quote-carousel" class="carousel slide" data-ride="carousel" data-interval="{{ $interval * 1000 }}">
    <div class="carousel-inner">
      @foreach ($quotes as $quote)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

          <div class="container">
            <div class="row">
              <div class="col-12 col-md-10 col-lg-7">
                <h2 class="mb-4">{!! $quote['quote'] !!}</h2>
                <div class="float-left layout-block__quote-author">
                  &ndash;
                </div>
                <div class="float-left ml-1">
                  <div class="layout-block__quote-author">{{ $quote['name'] }}</div>
                  <div class="layout-block__quote-title">{!! $quote['title'] !!}</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      @endforeach
    </div>
  </div>
</div>
