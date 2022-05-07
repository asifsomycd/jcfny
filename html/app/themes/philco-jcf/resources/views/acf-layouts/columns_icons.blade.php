@if (! $columns)
  @php return; @endphp
@endif

<div class="layout-block__columns-icons" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
  <div class="container text-center text-md-left">
    <{{ ! empty($h1) ? 'h1' : 'h2' }}>{!! $title !!}</{{ ! empty($h1) ? 'h1' : 'h2' }}>
    <div class="row justify-content-center mt-4 mb-3">
      @foreach ($columns as $column)
        <div class="col-8 col-md-4 mb-4 mb-lg-0 pl-lg-4 pr-lg-4 text-center">
          <div class="row">
            <div class="col-12 col-lg-4 mb-4">
              @if ($column['image'])
                <img src="{{ $column['image']['sizes']['col-4'] }}" alt="{{ $title ?? '' }}">
              @endif
            </div>
            <div class="col-12 col-lg-8 text-lg-left">
              {!! $column['text'] !!}
            </div>
          </div>
        </div>
      @endforeach
    </div>

    @if ($button)
      @include('partials.acf-link', array_merge(
        $button,
        [
          'class' => 'btn btn-outline-light'
        ]
      ))
    @endif
  </div>
</div>
