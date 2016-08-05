$(document).ready(function(){
	/* Camera
	 ========================================================*/
	jQuery('#camera_wrap').camera({
		loader: false,
		pagination: false,
		thumbnails: false,
		height: '47.571428571%',
		fx: 'random',
		rows: '3',
		slicedCols: '3',
		slicedRows: '3',
		caption: false,
		time:4000,
		hover: false,
	});
	/* Camera
	========================================================*/
	$(".pretty:first a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed:'normal',
		theme:'light_square',
		slideshow:3000, 
		autoplay_slideshow: true,
		social_tools: false,

	});
	/* Wow
	========================================================*/
	if ($('html').hasClass('desktop')) {
	 new WOW().init();
	 }   
	/* Animation
	========================================================*/
	$('.list1 li').hover(function(){
		$(this).addClass('animated pulse');
		$('i',this).addClass('animated swing');
		$(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', end_animation_function);
			}, function(){
			//$(this).removeClass('animated pulse');
		})

	function end_animation_function(){
		$(this).removeClass('animated pulse');
		$('i',this).removeClass('animated swing');
	}
	/*========================================================*/
	$('.js_hover_section1').hover(function(){
		$('.box-2', this).addClass('animated pulse');
		$('img', this).addClass('animated pulse');
		$('.num',this).addClass('animated swing');
		$(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', end_animation_function2);
			}, function(){
			//$(this).removeClass('animated pulse');
		})

	function end_animation_function2(){
		$('.box-2', this).removeClass('animated pulse');
		$('img', this).removeClass('animated pulse');
		$('.num',this).removeClass('animated swing');
	}
});
/* Camera
 ========================================================*/
//;(function ($) {
//    var o = $('#camera_wrap');
//    if (o.length > 0) {
//        if (!(isIE() && (isIE() > 9))) {
//            include('js/jquery.mobile.customized.min.js');
//        }
//        $(document).ready(function () {
//            o.camera({
//                loader: false,
//				pagination: false,
//				thumbnails: false,
//				height: '47.571428571%',
//				fx: 'random',
//				rows: '3',
//				slicedCols: '3',
//				slicedRows: '3',
//				caption: false,
//				time:4000,
//				hover: false,
//            })
//        });
//    }
//})(jQuery);