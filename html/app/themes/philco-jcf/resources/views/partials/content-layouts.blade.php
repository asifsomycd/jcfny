@if (! $content)
  @php return; @endphp
@endif

@foreach ($content as $area)
  @switch ($area['acf_fc_layout'])
      @case ('quote_carousel')
        @include('acf-layouts.quotes', [
          'interval' => $area['quote_interval'],
          'quotes' => $area['quotes'],
        ])
        @break

      {{-- If the view filename matches the layout name  --}}
      @default
        @include('acf-layouts.' . $area['acf_fc_layout'], $area)
        @break
  @endswitch
@endforeach
