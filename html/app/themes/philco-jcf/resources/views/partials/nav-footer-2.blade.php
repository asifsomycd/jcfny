<nav class="nav-footer nav-footer__1">
  <p><strong>Specialized Funds</strong></p>
  @if(has_nav_menu('footer_2_navigation'))
    {!! wp_nav_menu(['theme_location' => 'footer_2_navigation', 'menu_class' => 'nav']) !!}
  @endif
</nav>
