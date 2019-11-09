@if (!$video_id || !$modal_id)
  @php return; @endphp
@endif

<a href="#1"
  class="{{ $button_classes ?: 'btn btn-primary' }}"
  data-toggle="modal"
  data-target=".video-{{ $modal_id }}">
  {!! $button_text !!}
</a>

@section('modal-body')
  <div class="embed-responsive embed-responsive-16by9">
    <iframe data-src="https://www.youtube.com/embed/{{ $video_id }}?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
@overwrite

@section('modals')
  @parent

  @include('partials.modal', [
    'type' => 'iframe-video',
    'class' => 'video-' . $modal_id,
  ])
@endsection
