<header class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 col-xl-5 offset-lg-1">
				@include('partials.entry-meta')
				<h1 class="entry-title h2" data-scroll>{!! get_the_title() !!}</h1>
				@include('partials.categories')
			</div>
		</div>
	</div>
</header>
