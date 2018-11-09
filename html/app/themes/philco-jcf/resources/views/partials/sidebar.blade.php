@if ( $show_sidebar )

    @if ( App\is_blog() )
        @php
        $related_posts = App\related_posts();
        @endphp

        @if ( $related_posts->have_posts() )
            <aside class="widget widget--related-posts" data-scroll>
                <h4 class="widget__title">Related Posts</h4>
                @while( $related_posts->have_posts() )
                    @php $related_posts->the_post() @endphp
                    <div class="related-post">
                        @include('partials/entry-meta')
                        <h3 class="related-post__title"><a href="{{ get_the_permalink() }}">{!! get_the_title() !!}</a></h3>
                        <a href="{{ get_the_permalink() }}" class="more-link">Read more</a>
                    </div>
                @endwhile
                @php wp_reset_postdata() @endphp
            </aside>
        @endif
    @endif

    @include('partials.action-form')

@endif
