<header class="site-header d-none d-xl-block">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-8 col-sm-6 col-md-4">
				<a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/jcf-horizontal.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
			</div>
			<div class="col-auto">
				<nav class="nav-top">
					@if ( has_nav_menu( 'top_navigation' ) )
						{!! wp_nav_menu( [
							'theme_location' => 'top_navigation',
							'menu_class' 	=> 'nav'
						] ) !!}
					@endif
				</nav>
			</div>
		</div>

		<nav class="nav-primary">
			@if ( has_nav_menu( 'primary_navigation' ) )
				{!! wp_nav_menu( [
					'theme_location' => 'primary_navigation',
					'menu_class' 	=> 'nav',
					'walker'		=> new App\wp_bootstrap4_navwalker()
				] ) !!}
			@endif
		</nav>
	</div>
</header>

<header class="sticky-header">
	<div class="container">
		<div class="row">
			<div class="sticky-header__brand col-6 col-xl-1 align-self-center">
				<a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/jcf-badge.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
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
		'menu_class' 	=> 'nav-mobile__primary',
		'container'		=> false,
	] ) !!}
	{!! wp_nav_menu( [
		'theme_location' => 'top_navigation',
		'menu_class' 	=> 'nav-mobile__top',
		'container'		=> false,
	] ) !!}
@overwrite


@section('modals')
    @parent

	@include('partials.modal', [
	    'class'     => 'nav-modal',
	    'type'		=> 'mobile-nav',
	] )
@endsection
