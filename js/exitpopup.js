
// Using \n breaks the lines and use \' for single quotes

var myMessage = 'So, you decide to leave? Let me try to convince you.\n\nI would like to offer you the Equinox FREE Trial for $3.95 (Shipping & Handling) instead of $4.95, Now this is really the last chance to avail this discount.\n\nTo get your Full 30 Day Equinox FREE Trial for $3.95/- just press Cancel.\n\nTo close this page, press OK';
var alertOnlyMessage = 'So, you decide to leave? Let me try to convince you.\n\nI would like to offer you the Equinox FREE Trial for $3.95 (Shipping & Handling) instead of $4.95, This is the last chance to avail this discount.';
//var specialOffer = 'https://www.equinoxdna.com/o12/billinginfo_discount.php';
var specialOffer = 'http://www.equinoxdna.com/affiliates/click.php?id=5260&pgid=309&subid=o12-discount-new';
//var specialOffer = 'http://localhost/equi-o2/billinginfo_discount.php';
//var specialOffer = 'billinginfo_discount';



function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            if (oldonload) {
                oldonload();
            }
            func();
        }
    }
}
function addClickEvent(a, i, func) {
    if (typeof a[i].onclick != 'function') {
        a[i].onclick = func;
    }
}
var theDiv = '<div style="display:block; width:100%; height:100%; position:absolute; background:#FFFFFF; margin-top:0px; margin-left:0px;" align="center">';
theDiv = theDiv + '<iframe src="' + specialOffer + '" width="100%" height="100%" align="middle" frameborder="0"></iframe>';
theDiv = theDiv + '</div>';
theBody = document.body;
if (!theBody) {
    theBody = document.getElementById("body");
    if (!theBody) {
        theBody = document.getElementsByTagName("body")[0];
    }
}
var StopExit = false;
function UnPopIt() { };
function DisplayPop() {
    if (StopExit == false) {
        window.scrollTo(0, 0);
        StopExit = true;
		window.onbeforeunload = UnPopIt;
        divtag = document.createElement("div");
        divtag.style.position = "absolute";
        divtag.style.width = "100%";
        divtag.style.height = "100%";
        divtag.style.zIndex = "99";
        divtag.style.left = "0px";
        divtag.style.top = "0px";
        divtag.innerHTML = theDiv;
        theBody.innerHTML = "";
        theBody.topMargin = "0px";
        theBody.rightMargin = "0px";
        theBody.bottomMargin = "0px";
        theBody.leftMargin = "0px";
        theBody.style.overflow = "hidden";
        theBody.appendChild(divtag);

		alert(alertOnlyMessage);
        return myMessage;
    }
}
var a = document.getElementsByTagName('A');
for (var i = 0; i < a.length; i++) {
    if (a[i].target !== '_blank') {
        addClickEvent(a, i,
        function() {
            StopExit = true;
        });
    } else {
        addClickEvent(a, i,
        function() {
            StopExit = false;
        });
    }
}
disablelinksfunc = function() {
    var a = document.getElementsByTagName('A');
    for (var i = 0; i < a.length; i++) {
        if (a[i].target !== '_blank') {
            addClickEvent(a, i,
            function() {
                StopExit = true;
            });
        } else {
            addClickEvent(a, i,
            function() {
                StopExit = false;
            });
        }
    }
}
addLoadEvent(disablelinksfunc);
disableformsfunc = function() {
    var f = document.getElementsByTagName('FORM');
    for (var i = 0; i < f.length; i++) {
        if (!f[i].onclick) {
            f[i].onclick = function() {
                StopExit = true;
            }
        } else if (!f[i].onsubmit) {
            f[i].onsubmit = function() {
                StopExit = true;
            }
        }
    }
}
addLoadEvent(disableformsfunc);
window.onbeforeunload = DisplayPop;