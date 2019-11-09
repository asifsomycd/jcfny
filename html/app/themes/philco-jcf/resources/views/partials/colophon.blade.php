<div id="colophon">
  &copy; {{ date('Y') }} {!! $site_name !!}
  @if(has_nav_menu('colophon_navigation'))
    {!! wp_nav_menu(['theme_location' => 'colophon_navigation', 'menu_class' => 'nav']) !!}
  @endif
  <div class="trust-e d-inline-block pl-md-3">
    <a href="//privacy.truste.com/privacy-seal/validation?rid=d6cbd88e-e7c6-4238-8ab5-6a1d7adf5405" target="_blank"><img style="border: none" src="//privacy-policy.truste.com/privacy-seal/seal?rid=d6cbd88e-e7c6-4238-8ab5-6a1d7adf5405" alt="TRUSTe"/></a>
  </div>
</div>
