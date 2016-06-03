function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};
/* Jquery UI
 ========================================================*/
include('js/jquery-ui.min.js');

/* Jquery Skick Nav - Moblie menu
 ========================================================*/
include('js/jquery.slicknav.js');

/* Main
 ========================================================*/
$(function(){
        $('#menu_main').slicknav({
            label: 'Menu2',
            duration: 1000,
            easingOpen: "easeOutBounce",
        });
    });