export default {
	init() {
		// JavaScript to be fired on the single post page

	},
	finalize() {

		// Share links

			$( '.share__handlers a' ).on( 'click', function ( e ) { 
				e.preventDefault();

				let popupWidth = 600;
				let popupHeight = 400;
				let leftPosition = ( screen.width ) ? ( screen.width - popupWidth ) / 2 : 0;
				let topPosition = ( screen.height ) ? ( screen.height - popupHeight ) / 2 : 0;

				window.open(
					$( this ).attr( 'href' ),
					'share',
					'height=' + popupHeight + ',width=' + popupWidth + ',left=' + leftPosition + ',top=' + topPosition + ',resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no'
				);
			} );
	},
};
