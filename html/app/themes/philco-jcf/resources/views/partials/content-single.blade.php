<article @php post_class() @endphp>
	<div class="entry-content">

		<div class="row">
			<div class="the-content col-10">
				@if ( has_post_thumbnail() ) 
					{{ the_post_thumbnail( 'col-4' ) }} 
				@endif
				@php the_content() @endphp
				<div class="text-right mt-5">
					<a href="{{ get_the_permalink( $page_for_posts ) }}" class="btn btn-primary">Show More Posts</a>
				</div>
			</div>

			<div class="share col-2 pl-0 pl-lg-3 text-right text-lg-left">
				<div class="position-sticky text-center">
					@include('partials.share')
				</div>
			</div>
		</div>
	</div>
	<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
	</footer>
	@php comments_template('/partials/comments.blade.php') @endphp
</article>
