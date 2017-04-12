/* Top menu
 ========================================================*/
$(function () {
    var acc = document.getElementsByClassName("drop-menu");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(e){
                if($('.drop-menu.active').html() != $(this).html()) {
                    $('.drop-menu.active').next().removeClass('show');
                    $('.drop-menu.active').removeClass('active');
                }
                this.classList.toggle("active");
                e.stopPropagation();
          }
        }
        $("html").on("click", function() {
            $('.drop-menu.active').next().removeClass('show');
            $('.drop-menu.active').removeClass('active');
        })
});
/* Slider
 ========================================================*/
//jQuery(function () {
//    jQuery('#allinone_carousel_charming').allinone_carousel({
//        skin: 'charming'
//        , responsive: false
//        , autoPlay: 3
//        , resizeImages: true
//        , autoHideBottomNav: true
//        , showElementTitle: true
//        , verticalAdjustment: 50
//        , showPreviewThumbs: false
//        , snumberOfVisibleItems: 7
//        , nextPrevMarginTop: 23
//        , playMovieMarginTop: 0
//
//    });
//
//});

$(document).ready(function () {
    $('.carousel').carousel({
        carouselWidth: 930
        , carouselHeight: 330
        , directionNav: false
        , reflection: false
        , shadow: true
//        , buttonNav: 'bullets'
        ,autoplay:true
        ,autoplayTimeout:500
        ,autoplayHoverPause:true
        ,vAlign: 'bottom'
        , slidesPerScroll: 9
        , frontWidth: 330
        , frontHeight: 320
    });
});

$(function () {
    $('a.nav-img').on('dblclick', function (e) {
        e.preventDefault(); // prevent the default <a> behaviour
        $('.active').removeClass('active');// remove currently active element
        var $elm = $(this), // store the clicked element
            activateElement = $elm.attr('href'), // get the value of the href attribute
            $valHrefElm = $elm.attr('id'); // get the value of the href attribute
        
        $(activateElement).addClass('active'); // set clicked element to active by removing non_active
        
        $valHrefElm = $valHrefElm.replace('#', '');
        $('ul.page-scroll li').each(function () {
            var $thisClass = $(this).attr('id');
            if ($thisClass.search($valHrefElm) > -1) {
                $(this).addClass('active');
            }
        });
    });
    
    $('.page-scroll li').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        var i = $(this).index();
        $('.section')
            .eq(i)
            .addClass('active')
            .siblings()
            .removeClass('active');
    });
});

/* Custom scroll bar
 ========================================================*/
(function ($) {
    $(window).on("load", function () {
        $(".mcScrollbar").mCustomScrollbar({
            theme: "dark-K"
        });
    });
})(jQuery);
/* Swiper slider
 ========================================================*/
(function ($) {
//    var swiper = new Swiper('.swiper-main', {
//        pagination: '.swiper-pagination',
//        paginationClickable: true,
//        direction: 'vertical'
//    });
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 6,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true
    });
    var swiper = new Swiper('.radioSlider', {
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true
    });
    var swiper = new Swiper('.lets-talk-slide', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true
    });
    
    var swiper = new Swiper('.video-main-slider', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
})(jQuery);

/* WOW
 ========================================================*/
$(function () {
    new WOW().init();
});

