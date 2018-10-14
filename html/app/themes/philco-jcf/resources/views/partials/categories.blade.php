<div class="entry-categories">
    Category:
    <form class="d-inline form-inline categories-dropdown">
        @php
        wp_dropdown_categories( [
            'orderby'           => 'name',
            'class'             => 'form-control form-control-sm w-auto d-inline',
            'show_option_all'   => 'Browse by Category',
            'selected'          => get_the_category()[0]->term_id,
        ] )
        @endphp
    </form>
    <script>
        var dropdown = document.getElementById( 'cat' );
        function onCatChange() {
            if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                location.href = '{{ home_url( '/' ) }}?cat=' + dropdown.options[dropdown.selectedIndex].value;
            } else {
                location.href = '{{ get_the_permalink( $page_for_posts ) }}';
            }
        }
        dropdown.onchange = onCatChange;
    </script>
</div>
