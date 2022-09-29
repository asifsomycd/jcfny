<header class="site-header d-none d-xl-block">
	<div class="container">
		<div class="row justify-content-between align-items-center header__top-row">
			<div class="col-8 col-sm-6 col-md-5">
				<a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/jcf-logo-50.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
			</div>
			<div class="col-auto">
				<nav class="nav-top">
					@if ( has_nav_menu( 'top_navigation' ) )
						{!! wp_nav_menu( [
							'theme_location' => 'top_navigation',
							'menu_class' 	=> 'nav'
						] ) !!}
          @endif
          @include('partials.search-link-modal')
				</nav>
			</div>
		</div>

		<nav class="nav-primary">
			@if ( has_nav_menu( 'primary_navigation' ) )
				{!! wp_nav_menu( [
					'theme_location' => 'primary_navigation',
					'menu_class' => 'nav',
          'walker' => new App\wp_bootstrap4_navwalker(),
          'depth' => 2,
				] ) !!}
			@endif
		</nav>
	</div>
</header>

<header class="sticky-header">
	<div class="container">
		<div class="row">
			<div class="sticky-header__brand col-9 col-xl-1 align-self-center">
				<a class="brand" href="{{ home_url('/') }}">
					<img class="d-none d-xl-block" src="@asset('images/jcf-badge.svg')" alt="{{ get_bloginfo('name', 'display') }}">
					<img class="d-xl-none" src="@asset('images/jcf-horizontal.svg')" alt="{{ get_bloginfo('name', 'display') }}">
				</a>
			</div>
			<div class="sticky-header__nav-primary col-6 d-none d-xl-block align-self-center"></div>
			<div class="sticky-header__nav-top col-5 d-none d-xl-block ml-auto"></div>
			<div class="mobile-nav-bars col d-xl-none align-self-center ml-auto text-right">
				<span data-toggle="modal" data-target=".nav-modal"><i class="far fa-bars fa-2x"></i></span>
			</div>
		</div>
	</div>
</header>

@section('modal-body')
	{!! wp_nav_menu( [
		'theme_location' => 'primary_navigation',
		'menu_class' 	  => 'nav-mobile__primary',
		'container'		  => false,
	] ) !!}
	{!! wp_nav_menu( [
		'theme_location' => 'top_navigation',
		'menu_class' 	  => 'nav-mobile__top',
		'container'		  => false,
  ] ) !!}
  @include('partials.search-link')
@overwrite

@section('modals')
  @parent

	@include('partials.modal', [
	    'class' => 'nav-modal',
	    'type'  => 'mobile-nav',
	] )
@endsection
