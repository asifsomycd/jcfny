<header class="site-header d-none d-xl-block">
  <div class="container header__top-row">
    <div class="row justify-content-between">
      <div class="col-8 col-sm-6 col-md-5">
        <a
          class="brand"
          href="{{ home_url('/') }}"
        >
          <img
            src="@asset('images/jcf-logo.svg')"
            alt="{{ get_bloginfo('name', 'display') }}"
          >
        </a>
      </div>
      <div class="col-auto d-flex">
        <nav class="nav-top d-flex align-self-center">
          @if ($action_buttons['primary'])
            @include(
                'partials.acf-link',
                array_merge($action_buttons['primary'], [
                    'class' => 'btn btn-primary text-nowrap',
                ]))
          @endif

          @if ($action_buttons['secondary'])
            @include(
                'partials.acf-link',
                array_merge($action_buttons['secondary'], [
                    'class' => 'btn btn-tealish ml-5 text-nowrap d-none d-md-block',
                ]))
          @endif
        </nav>
      </div>
    </div>
  </div>
</header>

<header class="sticky-header sticky-header--action-buttons">
  <div class="container">
    <div class="row align-items-center">
      <div class="sticky-header__brand col-6 col-md-6 align-self-center">
        <a
          class="brand"
          href="{{ home_url('/') }}"
        >
          <img
            src="@asset('images/jcf-horizontal.svg')"
            alt="{{ get_bloginfo('name', 'display') }}"
          >
        </a>
      </div>
      <div class="sticky-header__nav-top col-auto d-flex ml-auto"></div>
    </div>
  </div>
</header>
