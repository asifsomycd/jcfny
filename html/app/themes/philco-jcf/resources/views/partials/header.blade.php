@switch($nav_type)
  @case('action-buttons')
    @include('partials.nav-action-buttons')
    @break

  @default
    @include('partials.nav-default')
@endswitch
