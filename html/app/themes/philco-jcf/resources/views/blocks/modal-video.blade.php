{{--
  Title: YouTube Modal Button
  Description: Add a button that opens a YouTube video in a modal.
  Category: formatting
  Icon: video-alt3
  Keywords: video youtube modal popup
  Mode: edit
  Align: left right center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: true
  SupportsMultiple: true
  EnqueueStyle:
  EnqueueScript:
  EnqueueAssets:
--}}

@switch(get_field('style'))
  @case('link')
    @php
      $classes = '';
    @endphp
    @break;

  @case('button-link')
    @php
      $classes = 'acf-link link-dark-turquoise link-underline';
    @endphp
    @break;

  @case('button')
  @default
    @php
      $classes = 'btn btn-primary';
    @endphp
    @break;
@endswitch

@include('partials.modal-video', [
  'button_classes' => $block['classes'] . ' ' . $classes,
  'button_text' => get_field('text'),
  'video_id' => get_field('video_id'),
  'modal_id' => $block['id'],
])

{{--
<style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_color') }};
    color: {{ get_field('text_color') }};
  }
</style>
--}}
