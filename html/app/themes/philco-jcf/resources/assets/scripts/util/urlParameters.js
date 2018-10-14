let urlParameters;

( window.onpopstate = function () {
    let match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

    urlParameters = {};
    while ( false == ! ( match = search.exec( query ) ) ) {
       urlParameters[ decode( match[1] ) ] = decode( match[2] );
    }
} )();

export default urlParameters;
