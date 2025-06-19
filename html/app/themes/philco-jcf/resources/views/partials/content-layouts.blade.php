@if (!$content)
  @php return; @endphp
@endif

@foreach ($content as $area)
  @switch ($area['acf_fc_layout'])
    @case ('quote_carousel')
      @include('acf-layouts.quotes', ['area' => $area, 'index' => $loop->index])
    @break

    @case ('layout_columns')
      @include('acf-layouts.columns', ['area' => $area, 'index' => $loop->index])
    @break

    @case ('layout_columns_icons')
      @include('acf-layouts.columns_icons', ['area' => $area, 'index' => $loop->index])
    @break

    @case ('impact')
      @include('acf-layouts.impact', [
          'impact' => $area['impact'],
          'title' => $area['title'],
          'text' => $area['text'],
          'button' => $area['button'],
          'index' => $loop->index,
      ])
    @break

    {{-- If the view filename matches the layout name  --}}

    @default
      @include('acf-layouts.' . $area['acf_fc_layout'], ['area' => $area, 'index' => $loop->index])
    @break
  @endswitch
@endforeach
