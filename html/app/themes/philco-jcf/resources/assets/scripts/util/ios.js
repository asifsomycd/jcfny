/**
 * iOS hack: Add an optgroup to every select in order to avoid truncating the content
 */
if (navigator.userAgent.match(/(iPad|iPhone|iPod touch);/i)) {
    var selects = document.querySelectorAll("select");
    for (var i = 0; i < selects.length; i++ ){
        selects[i].appendChild(document.createElement("optgroup"));
    }
}
