<header class="site-header d-none d-xl-block">
  <div class="container">
    <div class="row justify-content-between align-items-center header__top-row">
      <div class="col-8 col-sm-6 col-md-5">
        <a
          class="brand"
          href="{{ home_url('/') }}"
        >
          <img
            src="@asset('images/jcf-logo.svg')"
            alt="{{ get_bloginfo('name', 'display') }}"
            fetchpriority="high"
          ></a>
      </div>
      <div class="col-auto">
        <nav class="nav-top">
          <div class="menu-top-navigation-container">
            @include('partials.nav-extras', [
                'search_modal' => true,
                'classes' => 'd-flex justify-content-end align-items-center',
                'format_links' => true,
            ])
          </div>
        </nav>
      </div>
    </div>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav',
            'walker' => new App\wp_bootstrap4_navwalker(),
            'depth' => 2,
        ]) !!}
      @endif
    </nav>
  </div>
</header>

<header class="sticky-header">
  <div class="container">
    <div class="row">
      <div class="sticky-header__brand col-9 col-xl-1 align-self-center">
        <a
          class="brand"
          href="{{ home_url('/') }}"
        >
          <img
            class="d-none d-xl-block"
            src="@asset('images/jcf-badge.svg')"
            alt="{{ get_bloginfo('name', 'display') }}"
            fetchpriority="high"
          >
          <img
            class="d-xl-none"
            src="@asset('images/jcf-horizontal.svg')"
            alt="{{ get_bloginfo('name', 'display') }}"
            fetchpriority="high"
          >
        </a>
      </div>

      {{-- Upon scroll, show nav-primary items to the left --}}
      <div class="sticky-header__nav-primary col-6 d-none d-xl-block align-self-center"></div>

      {{-- Upon scroll, show nav-top items to the right --}}
      <div class="sticky-header__nav-top col-5 d-none d-xl-block ml-auto">
        @include('partials.nav-extras', [
            'classes' => 'd-flex justify-content-end align-items-center',
            'search_link' => true,
            'format_links' => true,
        ])
      </div>

      {{-- Upon scroll, show mobile menu button to the right --}}
      <div class="mobile-nav-bars col d-xl-none align-self-center ml-auto text-right">
        <span
          data-toggle="modal"
          data-target=".nav-modal"
        ><i class="far fa-bars fa-2x"></i></span>
      </div>
    </div>
  </div>
</header>

{{-- Upon scroll, show nav-top items to the right --}}
<div class="page-actions d-xl-none bg-primary">
  @include('partials.nav-extras', [
      'classes' => 'd-flex justify-content-center align-items-center',
  ])
</div>

@section('modal-body')
  @include('partials.nav-extras', [
      'format_links' => false,
  ])

  {!! wp_nav_menu([
      'theme_location' => 'primary_navigation',
      'menu_class' => 'nav-mobile__primary',
      'container' => false,
  ]) !!}
  <div class="mt-3">
    @include('partials.search-link')
  </div>
@overwrite

@section('modals')
  @parent

  @include('partials.modal', [
      'class' => 'nav-modal',
      'type' => 'mobile-nav',
  ])
@endsection
