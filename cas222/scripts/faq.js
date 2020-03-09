document.getElementByClass = function(theClass) {
    var elementArray = [];
    if (typeof document.all != "undefined") {
        elementArray = document.all;
    } else {
        elementArray = document.getElementsByTagName("*");
    }
    var matchedArray = [];
    var pattern = new RegExp("(^| )" + theClass + "( |$)");
    for (var i = 0; i < elementArray.length; i++) {
        if (pattern.test(elementArray[i].className)) {
            matchedArray[matchedArray.length] = elementArray[i];
        }
    }
    return matchedArray;
};
// Toggle Functions
// Source modified from http://bonrouge.com/~togglit
function toggleNext(elm) {
    var next = elm.nextSibling;
    while ( next.nodeType !== 1 ) {
        next = next.nextSibling;
    }
    next.style.display = (
        (next.style.display === "none")
            ? "block"
            : "none"
    );
}

function toggleEl(elm) {
    elm.className += ' ' + 'clicker';
    elm.onclick = function() {
        toggleNext(this);
    }
    toggleNext(elm);
}

var sheet = document.createElement('style');
sheet.innerHTML = ".clicker { cursor: pointer; text-decoration: underline;}";
document.head.appendChild(sheet);
var toggle = document.getElementByClass("toggle");
if ( toggle != undefined ) {
    for (var i in toggle) {
        toggleEl( toggle[i] );
    }
}