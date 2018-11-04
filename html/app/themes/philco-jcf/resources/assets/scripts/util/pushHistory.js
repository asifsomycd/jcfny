let doPopState = true;

window.addEventListener( 'popstate', function( event ) {
    console.log( event.state );
    if ( event.state ) {
        if ( event.state.trigger ) {
            doPopState = false;
            $( '.collapsible__trigger a[href="' + event.state.trigger + '"]' ).trigger( 'click' );
            doPopState = true;
            return false;
        }
    }
} );

function pushHistory( target, title, trigger ) {
    target =    target || false;
    title =     title || false;
    trigger =   trigger || false;

    if ( ! target || ! title || ! doPopState ) {
        return;
    }

    history.pushState( {
        'targetHref':   target,
        'trigger':      trigger,
    }, title, target );

    // Google Tag Manager

        if ( typeof dataLayer !== 'undefined' ) {
            window.dataLayer.push( {
                'event':            'PushPageview',
                'pushPageURL':      window.location.href.replace( window.location.origin, '' ),
                'pushPageTitle':    title,
            } );
        }

    document.title = title;
}

export default pushHistory;
