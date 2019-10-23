<header class="site-header d-none d-xl-block">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-8 col-sm-6 col-md-5">
				<a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/jcf-horizontal.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
			</div>
			<div class="col-auto d-flex">
				<nav class="nav-top d-flex align-self-center">
          @if($action_buttons['primary'])
            @include('partials.acf-link', array_merge(
				$action_buttons['primary'],
				[
					'class' => 'btn btn-primary text-nowrap',
				])
			)
          @endif

          @if($action_buttons['secondary'])
            @include('partials.acf-link', array_merge(
              $action_buttons['secondary'],
              [
                'class' => 'btn btn-tealish ml-5 text-nowrap',
              ])
            )
          @endif
        </nav>
			</div>
		</div>
	</div>
</header>

<header class="sticky-header">
	<div class="container">
		<div class="row">
			<div class="sticky-header__brand col-9 col-md-6 col-xl-1 align-self-center">
				<a class="brand" href="{{ home_url('/') }}">
					<img class="d-none d-xl-block" src="@asset('images/jcf-badge.svg')" alt="{{ get_bloginfo('name', 'display') }}">
					<img class="d-xl-none" src="@asset('images/jcf-horizontal.svg')" alt="{{ get_bloginfo('name', 'display') }}">
				</a>
			</div>
			<div class="sticky-header__nav-top col-auto d-none d-md-flex ml-auto"></div>
		</div>
	</div>
</header>
