@if (!$area['columns'])
  @php return; @endphp
@endif

<div
  class="layout-block__columns
    {{ $disable_parallax_backgrounds ? 'skip-parallax' : '' }}
  "
  data-enllax-ratio="0.1"
  data-enllax-background-align="right"
  @if ($index > 0) data-scroll @endif
>
  <div class="container">
    <{{ $area['h1'] ? 'h1' : 'h2' }}>{!! $area['title'] !!}</{{ $area['h1'] ? 'h1' : 'h2' }}>
      <div class="row">
        @foreach ($area['columns'] as $column)
          <div class="col-12 col-md-4 mb-4 mb-lg-0">
            @if ($column['title'])
              <p class="text-blueberry lead"><strong>{!! $column['title'] !!}</strong></p>
            @endif
            <p class="text-blueberry">{!! $column['text'] !!}</p>
            @if ($column['link'])
              @include(
                  'partials.link',
                  array_merge($column['link'], [
                      'class' => 'underline',
                  ]))
            @endif
          </div>
        @endforeach
      </div>
  </div>
</div>
