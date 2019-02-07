<article @php post_class( 'row' ) @endphp data-scroll>
	<header class="entry-header @if ( has_post_thumbnail() ) entry-header--with-featured-image @endif col-12 col-lg-6">
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
		<h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
		<div class="featured-image">
			<div class="featured-image-item" style="background-image: url({{ the_post_thumbnail_url() }});"></div>
		</div>
	</header>

	<div class="entry-summary col-12 col-lg-6">
		@php
			$more_tag = strpos($post->post_content, '<!--more-->');
			$more_tag ? the_content('Continued') : the_excerpt();
		@endphp
	</div>
</article>
