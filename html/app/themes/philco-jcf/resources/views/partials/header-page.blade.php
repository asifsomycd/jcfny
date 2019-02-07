<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-1">
				@if ( is_404() )
					<h1 class="entry-title h2" data-scroll>{!! $error_title !!}</h1>
        @elseif ( is_search() )
        <h1 class="entry-title h2" data-scroll>Search Results for "{{ get_search_query() }}"</h1>
        <div class="entry-meta">
          @php global $wp_query @endphp
          {{ $wp_query->found_posts }} results found
        </div>
				@elseif ( App\is_blog() )
					<h1 class="entry-title" data-scroll>{!! App::title() !!}</h1>
				@elseif ( get_the_title() )
					<h1 class="entry-title h2" data-scroll>{!! get_the_title() !!}</h1>
				@else
					<h1 class="entry-title h2" data-scroll>{!! $error_title !!}</h1>
				@endif
			</div>
		</div>
	</div>
</div>
