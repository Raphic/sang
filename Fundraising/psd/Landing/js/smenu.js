(function($){
$.fn.mobileMenu = function(options) {
  
  var defaults = {
      defaultText: 'Navigate to...',
      className: 'select-menu',
      subMenuClass: 'sub-menu',
      subMenuDash: '&ndash;'
    },
    settings = $.extend( defaults, options ),
    el = $(this);
  
  this.each(function(){
    var $el = $(this),
      $select_menu;

    // ad class to submenu list
    $el.find('ul').addClass(settings.subMenuClass);

    // Create base menu
    var $select_menu = $('<select />',{
      'class' : settings.className + ' ' + el.get(0).className
    }).insertAfter( $el );

    // Create default option
    $('<option />', {
      "value"   : '#',
      "text"    : settings.defaultText
    }).appendTo( $select_menu );

    // Create select option from menu
    $el.find('a').each(function(){
      var $this   = $(this),
        optText = '&nbsp;' + $this.text(),
        optSub  = $this.parents( '.' + settings.subMenuClass ),
        len   = optSub.length,
        dash;
      
      // if menu has sub menu
      if( $this.parents('ul').hasClass( settings.subMenuClass ) ) {
        dash = Array( len+1 ).join( settings.subMenuDash );
        optText = dash + optText;
      }

      // Now build menu and append it
      $('<option />', {
        "value" : this.href,
        "html"  : optText,
        "selected" : (this.href == window.location.href)
      }).appendTo( $select_menu );

    }); // End el.find('a').each

    // Change event on select element
    $select_menu.change(function(){
      var locations = $(this).val();
      if( locations !== '#' ) {
        window.location.href = $(this).val();
      };
    });
    $('.select-menu').show();
  }); // End this.each

  return this;

};
})(jQuery);
$(document).ready(function(){
	$('.sf-menu').mobileMenu();
});
//----Include-Function----
function include(url){ 
  document.write('<script src="js/'+ url + '"></script>'); 
  return false ;
}
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
$("#copyright-year").text( (new Date).getFullYear() );
});
//----Include-Function----
function include(url){ 
  document.write('<script src="js/'+ url + '"></script>'); 
  return false ;
}
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
$("#copyright-year").text( (new Date).getFullYear() );
});
/* SEARCH
========================================================*/
$(window).load(function(){
    var obj;
    if((obj = $('.js-search')).length > 0){
        $(obj).find('.toggle').click(function(){
            if($('.js-search').hasClass('active')){
                $('.js-search').removeClass('active');
            }else{
                $('.js-search').addClass('active');
            }
        });
    }
});
$(document).ready(function(){	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 20) {
			$('#toTop').stop(true).css({"display":"block"}).animate({"opacity": 1}, 200);
		} else {
			$('#toTop').stop(true).animate({"opacity": 0}, 200, function(){$(this).css({"display":"none"})});
		}
	});
	$('#toTop').click(function () {
		$('body, html').stop(true).animate({scrollTop: 0}, 600);
		return false;
	});
});
/*
Backtopxt
 */
(function($){
	$.fn.tmStickUp=function(options){ 
		
		var getOptions = {
			corectionValue: 0
		}
		$.extend(getOptions, options); 

		var
			_this = $(this)
		,	_window = $(window)
		,	_document = $(document)
		,	thisOffsetTop = 0
		,	thisOuterHeight = 0
		,	thisMarginTop = 0
		,	documentScroll = 0
		,	pseudoBlock
		,	lastScrollValue = 0
		,	scrollDir = ''
		,	tmpScrolled
		,	gridWidth = 0
		,	tmpTop = 0
		;

		init();
		function init(){
			parentContainer = _this.parent();
			thisOffsetTop = parseInt(_this.offset().top);
			thisMarginTop = parseInt(_this.css("margin-top"));
			thisOuterHeight = parseInt(_this.outerHeight(true));
			gridWidth = parseInt($('.container').width());

			$('<div class="pseudoStickyBlock"></div>').insertAfter(_this);
			pseudoBlock = $('.pseudoStickyBlock');
			pseudoBlock.css({"position":"relative", "display":"block"});

			_this.on("rePosition",
				function(e,d){
					tmpTop = d;
					_document.trigger('scroll');
				}
			)

			addEventsFunction();
		}//end init

		function addEventsFunction(){
			_document.on('scroll', function() {

				tmpScrolled = $(this).scrollTop();
					if (tmpScrolled > lastScrollValue){
						scrollDir = 'down';
					} else {
						scrollDir = 'up';
					}
				lastScrollValue = tmpScrolled;

				documentScroll = parseInt(_document.scrollTop());
				if(thisOffsetTop-thisMarginTop < documentScroll){
					_this.addClass('isStuck');
					_this.css({position:"fixed",top:tmpTop, zIndex:999, left:0, right:0, margin:"0 auto"})
					pseudoBlock.css({"height":thisOuterHeight});
				}else{
					_this.removeClass('isStuck');
					_this.css({position:"relative", top: 0});
					pseudoBlock.css({"height":0});
				}
				
			}).trigger('scroll');
		}
	}//end tmStickUp function
})(jQuery)

$(document).ready(function(){  
  $('#stuck_container').tmStickUp({});
});
/*
 * Superfish v1.4.8 - jQuery menu widget
 * Copyright (c) 2008 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 * CHANGELOG: http://users.tpg.com.au/j_birch/plugins/superfish/changelog.txt
 */

;(function($){
	$.fn.superfish = function(op){

		var sf = $.fn.superfish,
			c = sf.c,
			$arrow = $(['<span class="',c.arrowClass,'"></span>'].join('')),
			over = function(){
				var $$ = $(this), menu = getMenu($$);
				clearTimeout(menu.sfTimer);
				$$.showSuperfishUl().siblings().hideSuperfishUl();
			},
			out = function(){
				var $$ = $(this), menu = getMenu($$), o = sf.op;
				clearTimeout(menu.sfTimer);
				menu.sfTimer=setTimeout(function(){
					o.retainPath=($.inArray($$[0],o.$path)>-1);
					$$.hideSuperfishUl();
					if (o.$path.length && $$.parents(['li.',o.hoverClass].join('')).length<1){over.call(o.$path);}
				},o.delay);	
			},
			getMenu = function($menu){
				var menu = $menu.parents(['ul.',c.menuClass,':first'].join(''))[0];
				sf.op = sf.o[menu.serial];
				return menu;
			},
			addArrow = function($a){ $a.addClass(c.anchorClass).append($arrow.clone()); };
			
		return this.each(function() {
			var s = this.serial = sf.o.length;
			var o = $.extend({},sf.defaults,op);
			o.$path = $('li.'+o.pathClass,this).slice(0,o.pathLevels).each(function(){
				$(this).addClass([o.hoverClass,c.bcClass].join(' '))
					.filter('li:has(ul)').removeClass(o.pathClass);
			});
			sf.o[s] = sf.op = o;
			
			$('li:has(ul)',this)[($.fn.hoverIntent && !o.disableHI) ? 'hoverIntent' : 'hover'](over,out).each(function() {
				if (o.autoArrows) addArrow( $('>a:first-child',this) );
			})
			.not('.'+c.bcClass)
				.hideSuperfishUl();
			
			var $a = $('a',this);
			$a.each(function(i){
				var $li = $a.eq(i).parents('li');
				$a.eq(i).focus(function(){over.call($li);}).blur(function(){out.call($li);});
			});
			o.onInit.call(this);
			
		}).each(function() {
			var menuClasses = [c.menuClass];
			if (sf.op.dropShadows  && !($.browser.msie && $.browser.version < 7)) menuClasses.push(c.shadowClass);
			$(this).addClass(menuClasses.join(' '));
		});
	};

	var sf = $.fn.superfish;
	sf.o = [];
	sf.op = {};
	sf.IE7fix = function(){
		var o = sf.op;
		if ($.browser.msie && $.browser.version > 6 && o.dropShadows && o.animation.opacity!=undefined)
			this.toggleClass(sf.c.shadowClass+'-off');
		};
	sf.c = {
		bcClass     : 'sf-breadcrumb',
		menuClass   : 'sf-js-enabled',
		anchorClass : 'sf-with-ul',
		arrowClass  : 'sf-sub-indicator',
		shadowClass : 'sf-shadow'
	};
	sf.defaults = {
		hoverClass	: 'sfHover',
		pathClass	: 'overideThisToUse',
		pathLevels	: 1,
		delay		: 1200,
		animation	: {height:'show'},
		speed		: 'normal',
		autoArrows	: true,
		dropShadows : false,
		disableHI	: false,		// true disables hoverIntent detection
		onInit		: function(){}, // callback functions
		onBeforeShow: function(){},
		onShow		: function(){},
		onHide		: function(){}
	};
	$.fn.extend({
		hideSuperfishUl : function(){
			var o = sf.op,
				not = (o.retainPath===true) ? o.$path : '';
			o.retainPath = false;
			var $ul = $(['li.',o.hoverClass].join(''),this).add(this).not(not).removeClass(o.hoverClass)
					.find('>ul').hide().css('visibility','hidden');
			o.onHide.call($ul);
			//Cufon.refresh();
			return this;
		},
		showSuperfishUl : function(){
			var o = sf.op,
				sh = sf.c.shadowClass+'-off',
				$ul = this.addClass(o.hoverClass)
					.find('>ul:hidden').css('visibility','visible');
			sf.IE7fix.call($ul);
			o.onBeforeShow.call($ul);
			$ul.animate(o.animation,o.speed,function(){ sf.IE7fix.call($ul); o.onShow.call($ul); });
			return this;
		}
	});

})(jQuery);

$(function(){$('.sf-menu').superfish()})