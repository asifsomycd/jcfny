@if (!$impact)
  @php return; @endphp
@endif

<div
  class="layout-block__impact"
  @if ($index > 0) data-scroll @endif
>
  <div class="container text-center text-md-left">
    <div class="row">
      <div class="col-12 col-lg-6">
        <h2>{!! $title !!}</h2>
        {!! $text !!}
      </div>
    </div>
    <div class="row justify-content-center mt-4 mb-3">
      @foreach ($impact as $column)
        <div
          class="layout-block__impact-column count-up col-8 col-md-4 mb-4 mb-lg-0 {{ !$loop->first ? 'pl-lg-5' : '' }} {{ !$loop->last ? 'pr-lg-5' : '' }} text-center text-md-left"
          @if ($index > 0) data-scroll @endif
        >
          <div class="layout-block__impact-text">
            {{ $column['pre'] }}<span
              class="count-up-target"
              data-end="{!! $column['count'] !!}"
            >{!! $column['count'] !!}</span>{{ $column['post'] }}
          </div>
          <p>
            <strong>{{ $column['description'] }}</strong>
          </p>
        </div>
      @endforeach
    </div>

    @if ($button)
      <div class="row">
        <div class="col-12 col-md-4 pr-lg-5">
          @include('partials.acf-link', $button)
        </div>
      </div>
    @endif
  </div>
</div>
