{{--
  Title: Accordion
  Description: Add a collapsible accordion 🎶
  Category: formatting
  Icon: menu
  Keywords: accordion faq collapse
  Mode: auto
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: true
  SupportsMultiple: true
  EnqueueStyle:
  EnqueueScript:
  EnqueueAssets:
--}}

@if (! get_field('accordion'))
  @if ($block['is_preview'])
    <div class="alert alert-dark" role="alert">
      ➕ Click here to add accordion items.
    </div>
  @endif

  @php return; @endphp
@endif

@include('partials.collapsible', [
  'id' => $block['id'],
  'parent' => true,
  'collapsibles' => get_field('accordion')
])
