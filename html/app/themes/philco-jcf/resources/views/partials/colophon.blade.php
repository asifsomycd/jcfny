<div id="colophon">
  &copy; {{ date('Y') }} {!! $site_name !!}
  @if(has_nav_menu('colophon_navigation'))
    {!! wp_nav_menu(['theme_location' => 'colophon_navigation', 'menu_class' => 'nav']) !!}
  @endif
  <div class="trust-e d-inline-block pl-md-3">
    {!! $privacy_badge !!}
  </div>
</div>
