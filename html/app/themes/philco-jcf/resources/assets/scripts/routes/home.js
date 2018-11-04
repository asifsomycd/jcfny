// Normalize quote carousel height

	function quoteCarouselNormalization() {
		let items = $('#quote-carousel .carousel-item'), //grab all slides
			heights = [], //create empty array to store height values
			tallest; //create variable to make note of the tallest slide

		if (items.length) {
			items.each( function() { //add heights to array
				$( this ).css( 'min-height', '0' ); //reset min-height
				heights.push( $( this ).height() );
			} );
			tallest = Math.max.apply( null, heights ); //cache largest value
			items.each( function() {
				$( this ).css( 'min-height', tallest + 'px' );
			} );
		}
	}


export default {
	init() {
		// JavaScript to be fired on the home page
	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS

		// Normalize quote carousel height

			$( window ).on( 'window:resize', quoteCarouselNormalization() );
	},
};
