@if(!$content)
  @php return; @endphp
@endif

@foreach($content as $area)
  @switch($area['acf_fc_layout'])
      @case('title_and_text')
        @include('acf-layouts.title-and-text', $area)
        @break

      @case('text_and_photo')
        @include('acf-layouts.text-and-photo', $area)
        @break

      @case('layout_columns')
        @include('acf-layouts.columns', $area)
        @break

      @case('layout_columns_icons')
        @include('acf-layouts.columns-icons', $area)
        @break

      @case('action_form')
        @include('acf-layouts.action-form', $area)
        @break

      @case('quote_carousel')
        @include('acf-layouts.quotes', [
          'interval' => $area['quote_interval'],
          'quotes' => $area['quotes'],
        ])
        @break

      @case('faqs')
        @include('acf-layouts.faqs', $area)
        @break
  @endswitch
@endforeach
