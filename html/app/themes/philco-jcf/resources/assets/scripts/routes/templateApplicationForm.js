import urlParameters from '../util/urlParameters';

let appStep = 0;
const $appForm = $( '.application-form > .gform_wrapper' );

// Change the form step via body class

    function changeFormStep( step ) {
        $( 'body' )
            .removeClass( ( index, className ) => {
                return ( className.match (/(^|\s)app--step-\S+/g) || []).join(' ');
            } )
            .addClass( 'app--step-' + step );

        appStep = step;

        if ( appStep === 0 ) {

            // Move into postion

                $appForm.appendTo( $( '.form__step-0' ) );


            // Change next button text

                $( '.form__step-0 .gform_next_button' ).val( 'Start Application' );


            // Hide the app

                $( '.form__app' ).slideUp();


        } else {

            // Move into position

                $appForm.appendTo( $( '.form__entree' ) );


            // Change the step

                $( '.progress__step--' + appStep ).addClass( 'is-active' );
                $( '[class^="sidebar__step--"]' ).slideUp();
                $( '.sidebar__step--' + appStep ).slideDown();


            // Mobile scroll to progress indicator

                if ( window.innerWidth <= 768 ) {

                    setTimeout( () => {
                        let scrollOffset = $( '.progress__step--' + appStep ).offset();
                        $( '.form__progress-bar' ).animate( { 
                            scrollLeft: scrollOffset.left,
                        }, 250 );
                    }, 1000);
                }


            // Stylize add-another fields

                $( '.add-another' ).each( ( i, el ) => {
                    if ( ! $( el ).hasClass( 'initiated' ) ) {
                        $( el ).prepend( `
                            <span class="add-another__button fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                <i class="fas fa-minus fa-stack-1x fa-inverse d-none"></i>
                            </span>
                        ` );

                        $( el ).addClass( 'initiated' ).data( 'toggled', false );
                    }
                } );

            // Show the app

                $( '.form__app' ).slideDown();
        }

        $( 'html, body' ).animate( { scrollTop: 0 } );
    }


export default {
    init() {},
    finalize() {
        // JavaScript to be fired after the init JS

        // Move form to correct initial position on page load
        // If ?dev_form_page is set, go to that step (page - 1)

            changeFormStep( typeof ( urlParameters.dev_form_page ) !== 'undefined' ? urlParameters.dev_form_page - 1 : 0 );


        // Bind step 0 inputs; save field data for use in step 1

            $( '.remember-name .name_first input' ).on( 'change', function() {
                $( '.remembered-name .name_first input' ).val( $( this ).val() );
            } );

            $( '.remember-name .name_last input' ).on( 'change', function() {
                $( '.remembered-name .name_last input' ).val( $( this ).val() );
            } );

            $( '.remember-email input' ).on( 'change', function() {
                $( '.remembered-email input' ).val( $( this ).val() );
            } );


        // Bind to when next page is loaded

            $( document ).on( 'gform_page_loaded', ( event, form_id, current_page ) => {
                changeFormStep( current_page - 1 ); // Step 0 == page 1
            } );


        // Bind to when add-another is click

            $( '.form__app' ).on( 'click', '.add-another__button, .add-another label', function() {
                let $parent = $( this ).parent();

                if ( ! $parent.data( 'toggled' ) ) {
                    // Let's show it and set toggled to true

                    $parent.find( 'input:first' ).prop( 'checked', true ).trigger( 'click' );
                    $parent.find( 'label:first' ).text( function() {
                        return $( this ).text().replace( 'Add another', 'Remove' );
                    } );
                    $parent.find( '.fa-plus' ).addClass( 'd-none' );
                    $parent.find( '.fa-minus' ).removeClass( 'd-none' );
                    $parent.data( 'toggled', true );
                } else {
                    // Let's hide it and set toggled to false

                    $parent.find( 'input:last' ).prop( 'checked', true ).trigger( 'click' );
                    $parent.find( 'label:first' ).text( function() {
                        return $( this ).text().replace( 'Remove', 'Add another' );
                    } );
                    $parent.find( '.fa-plus' ).removeClass( 'd-none' );
                    $parent.find( '.fa-minus' ).addClass( 'd-none' );
                    $parent.data( 'toggled', false );
                }
            } );
	},
};
