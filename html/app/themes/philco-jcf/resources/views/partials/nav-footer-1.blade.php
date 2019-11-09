<nav class="nav-footer nav-footer__1">
  <p><strong>About Us</strong></p>
  @if(has_nav_menu('footer_1_navigation'))
    {!! wp_nav_menu(['theme_location' => 'footer_1_navigation', 'menu_class' => 'nav']) !!}
  @endif
</nav>
