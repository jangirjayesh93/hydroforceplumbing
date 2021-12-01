$(document).ready(function() {
    var menu_count = $(".menu li").has("ul").toArray();
    if (menu_count.length == 0) {
        $(".menu").addClass("no-sub");
    }
    $(".navigation").prepend('<span class="menu_title"><i class="fa fa-times"></i>Close Menu</span>');
    var width = $(window).width();
	if ($(".menu li").has("ul")) {
		$(".menu li").has("ul").addClass("sub");
		$(".menu li").has("ul").append("<span class='sub_toggle'></span>");
		$(".menu li ul").addClass("sub-menu");
	}
	$(".sub").click(function() {
		$(this).children("a").addClass("open");
	});
	if ($(".menu li").has("ul")) {
		$(".menu li").has("ul").addClass("sub");
		$(".menu li").has("ul").append("<span class='device_toggle'></span>");
		$(".menu li ul").addClass("sub-menu");
	}
	$(".device_toggle").click(function(e) {
		$(this).parent("li").children("ul").slideToggle();
		$(this).toggleClass("in");
		if ($(".menu li").hasClass("megamenu")) {
			$(this).parent("li").children(".mega_menu").slideToggle();
		}
	});
    if (width <= 1025) {
        $(".navigation").mCustomScrollbar();
    }
    if ($(".menu li li").has("ul")) {
        $(".menu li li").has("ul").addClass("inner-sub");
    }
    $(".navigation-toggle").click(function() {
        $("body").toggleClass("menu-action");
    });
    $(".menu_title").click(function() {
        $(".navigation-toggle").trigger("click");
    });
});
$(window).resize(function() {
    var width = $(window).width();
    if (width >= 1025) {
        $(".navigation").mCustomScrollbar("destroy");
    }
});
$(window).on('click touchend', function(e) {
    var width = $(window).width();
    if (width <= 1024) {
        if (!$(e.target).hasClass("navigation-toggle") && !$(e.target).hasClass("span-icon") && $(e.target).parents(".navigation").length === 0) {
            $("body").removeClass("menu-action");
        }
    }
    if (width >= 1025) {
        if (!$(e.target).hasClass("open") && !$(e.target).hasClass("sub")) {
            $(".sub").children("a").removeClass("open");
        }
    }
});