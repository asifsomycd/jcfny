<ul @class([
    'nav-extras list-unstyled mb-0',
    isset($format_links) && $format_links ? '' : 'nav-extras--no-format',
    $classes ?? '',
])>
  @foreach ($nav_extras as $extra)
    <li
      class="menu-item
      menu-item--{{ $extra['display_type'] }}
      {{ isset($format_links) && $format_links && $extra['display_type'] === 'button' ? 'tagged' : '' }}
      {{ $extra['show_on_mobile'] ? '' : 'd-none d-xl-block' }}"
    >
      <a
        href="{{ $extra['item']['url'] }}"
        target="{{ $extra['item']['target'] ?: '_self' }}"
      >
        {!! $extra['item']['title'] !!}
      </a>
    </li>
  @endforeach

  @if (isset($search_modal) && $search_modal)
    @include('partials.search-link-modal')
  @elseif (isset($search_link) && $search_link)
    <li class="search-link menu-item d-flex align-items-center">
      @include('partials.search-link')
    </li>
  @endif
</ul>
