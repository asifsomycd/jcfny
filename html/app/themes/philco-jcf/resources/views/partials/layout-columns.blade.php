@if(!$columns)
  @php return; @endphp
@endif

<div class="layout-block__columns" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
  <div class="container">
    <h2>{!! $title !!}</h2>
    <div class="row">
      @foreach($columns as $column)
        <div class="col-8 col-md-4 mb-4 mb-lg-0">
          <p class="text-blueberry lead"><strong>{!! $column['title'] !!}</strong></p>
          <p class="text-blueberry">{!! $column['text'] !!}</p>
          @if($column['link'])
            @include('partials.link', array_merge(
              $column['link'],
              [
                'class' => 'underline',
              ])
            )
          @endif
        </div>
      @endforeach
    </div>
  </div>
</div>
