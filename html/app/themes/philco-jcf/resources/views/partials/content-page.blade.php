<div class="row">
    <div class="col-12 @if ( App\display_sidebar() ) col-lg-10 @endif">
        @if ( has_post_thumbnail() ) 
            {{ the_post_thumbnail( 'col-4' ) }} 
        @endif
        @php the_content() @endphp
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </div>
</div>
