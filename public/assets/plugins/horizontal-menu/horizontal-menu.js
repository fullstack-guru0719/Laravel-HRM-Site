/* global jQuery */
/* global document */
jQuery(function() {
	'use strict';
	document.addEventListener("touchstart", function() {}, false);
	jQuery(function() {
		jQuery('body').wrapInner('<div class="horizontalMenucontainer" />');
		jQuery('<div class="horizontal-overlapbg"></div>').prependTo('.horizontalMenu');
		jQuery('.horizontal-navtoggle').on('click', function() {
			jQuery('body').toggleClass('active');
		});
		jQuery('.horizontal-overlapbg').on('click', function() {
			jQuery("body").removeClass('active');
		});
		jQuery('.horizontalMenu > .horizontalMenu-list > li').has('.sub-menu').prepend('<span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu > .horizontalMenu-list > li').has('.horizontal-megamenu').prepend('<span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu-click').on('click', function() {
			jQuery(this).toggleClass('ws-activearrow').parent().siblings().children().removeClass('ws-activearrow');
			jQuery(".horizontalMenu > .horizontalMenu-list > li > .sub-menu, .horizontal-megamenu").not(jQuery(this).siblings('.horizontalMenu > .horizontalMenu-list > li > .sub-menu, .horizontal-megamenu')).slideUp('slow');
			jQuery(this).siblings('.sub-menu').slideToggle('slow');
			jQuery(this).siblings('.horizontal-megamenu').slideToggle('slow');
		});
		jQuery('.horizontalMenu > .horizontalMenu-list > li > ul > li').has('.sub-menu').prepend('<span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu > .horizontalMenu-list > li > ul > li > ul > li').has('.sub-menu').prepend('<span class="horizontalMenu-click03"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu > .horizontalMenu-list > li > ul > li > ul > li > ul > li').has('.sub-menu').prepend('<span class="horizontalMenu-click04"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu-click02').on('click', function() {
			jQuery(".horizontalMenu > .horizontalMenu-list > li > .sub-menu .sub-menu").not(jQuery(this).siblings('.horizontalMenu > .horizontalMenu-list > li > .sub-menu .sub-menu')).slideUp('slow');
			jQuery(this).children('.horizontalMenu-arrow').toggleClass('horizontalMenu-rotate');
			jQuery(this).siblings('.sub-menu').slideToggle('slow');
		});
		jQuery('.horizontalMenu-click03').on('click', function() {
			jQuery(".horizontalMenu > .horizontalMenu-list > li > .sub-menu .sub-menu .sub-menu").not(jQuery(this).siblings('.horizontalMenu > .horizontalMenu-list > li > .sub-menu .sub-menu .sub-menu')).slideUp('slow');
			jQuery(this).children('.horizontalMenu-arrow').toggleClass('horizontalMenu-rotate');
			jQuery(this).siblings('.sub-menu').slideToggle('slow');
		});
		jQuery('.horizontalMenu-click04').on('click', function() {
			jQuery(".horizontalMenu > .horizontalMenu-list > li > .sub-menu .sub-menu .sub-menu .sub-menu").not(jQuery(this).siblings('.horizontalMenu > .horizontalMenu-list > li > .sub-menu .sub-menu .sub-menu .sub-menu')).slideUp('slow');
			jQuery(this).children('.horizontalMenu-arrow').toggleClass('horizontalMenu-rotate');
			jQuery(this).siblings('.sub-menu').slideToggle('slow');
		});
		jQuery(window).on('resize', function() {
			if (jQuery(window).outerWidth() < 992) {
				jQuery('.horizontalMenu').css('height', jQuery(this).height() + "px");
				jQuery('.horizontalMenucontainer').css('min-width', jQuery(this).width() + "px");
			} else {
				jQuery('.horizontalMenu').removeAttr("style");
				jQuery('.horizontalMenucontainer').removeAttr("style");
				jQuery('body').removeClass("active");
				jQuery('.horizontalMenu > .horizontalMenu-list > li > .horizontal-megamenu, .horizontalMenu > .horizontalMenu-list > li > ul.sub-menu, .horizontalMenu > .horizontalMenu-list > li > ul.sub-menu > li > ul.sub-menu, .horizontalMenu > .horizontalMenu-list > li > ul.sub-menu > li > ul.sub-menu > li > ul.sub-menu').removeAttr("style");
				jQuery('.horizontalMenu-click').removeClass("ws-activearrow");
				jQuery('.horizontalMenu-click02 > i').removeClass("horizontalMenu-rotate");
			}
		});
		jQuery(window).trigger('resize');
	});
	//Mobile Search Box
	jQuery(window).on("load", function() {
		jQuery('.horizontal-header .wssearch').on("click", function() {
			jQuery(this).toggleClass("wsopensearch");
		});
		jQuery("body, .wsopensearch .fa.fa-times").on("click", function() {
			jQuery(".wssearch").removeClass('wsopensearch');
		});
		jQuery(".wssearch, .wssearchform form").on("click", function(e) {
			e.stopPropagation();
		});
	});

	// ______________ Horizontal Active Class
	$(document).ready(function() {
		$(".horizontalMenu-list li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontal-megamenu li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontalMenu-list .sub-menu .sub-menu li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontalMenu-list .sub-menu .sub-menu .sub-menu li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
	});

    //Activate bootstrip tooltips
    $('[data-toggle="tooltip"]').tooltip();

}());
