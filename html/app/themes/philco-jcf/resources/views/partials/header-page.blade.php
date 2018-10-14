<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-1">
				@if ( App\is_blog() )
					<h1 class="entry-title" data-scroll>{!! App::title() !!}</h1>
				@elseif ( get_the_title() )
					<h1 class="entry-title h2" data-scroll>{!! get_the_title() !!}</h1>
				@else
					<h1 class="entry-title h2" data-scroll>Not Found</h1>
				@endif
			</div>
		</div>
	</div>
</div>
