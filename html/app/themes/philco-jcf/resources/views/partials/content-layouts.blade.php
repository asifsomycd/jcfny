@if(!$content)
  @php return; @endphp
@endif

@foreach($content as $area)
  @switch($area['acf_fc_layout'])
      @case('title_and_text')
        @include('partials.layout-title-and-text', $area)
        @break

      @case('text_and_photo')
        @include('partials.layout-text-and-photo', $area)
        @break

      @case('layout_columns')
        @include('partials.layout-columns', $area)
        @break

      @case('layout_columns_icons')
        @include('partials.layout-columns-icons', $area)
        @break

      @case('action_form')
        @include('partials.layout-action-form', $area)
        @break

      @case('quote_carousel')
        @include('partials.layout-quotes', [
          'interval' => $area['quote_interval'],
          'quotes' => $area['quotes'],
        ])
        @break

      @case('faqs')
        @include('partials.layout-faqs', $area)
        @break
  @endswitch
@endforeach
