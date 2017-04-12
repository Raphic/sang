function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}
function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

/* cookie.JS
 ========================================================*/
include('js/jquery-2.1.1.js');
/* Slider
 ========================================================*/
include('js/slider/allinone_carousel.js');
include('js/slider/jquery.touchSwipe.min.js');

include('js/jquery.mousewheel.min.js');
include('js/jquery.carousel-1.1.min.js');
include('js/jquery-ui.min.js');

include('js/jquery.mCustomScrollbar.js');
include('js/swiper.min.js');
include('js/wow.js');

include('js/loadpage/classie.js');
include('js/loadpage/snap.svg-min.js');
include('js/loadpage/svgLoader.js');