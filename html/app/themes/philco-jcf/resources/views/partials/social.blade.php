<div class="social">
  <small>
    @if ( $site_social )
      @foreach ( $site_social as $social )
        <a href="{{ $social['url'] }}" title="{{ $social['network'] }}" target="_blank" rel="nofollow">
          <i class="fab fa-{{ $social['icon'] }} fa-2x fa-fw"></i>
        </a>
      @endforeach
    @endif
  </small>
</div>
