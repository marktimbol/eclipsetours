$(document).ready(function() {

    $("header.slideshow").css({
        height: $(window).height() + "px"
    }), 

    $("#navigation").css({
        height: $(window).height() + 70 + "px"
    })

    $(window).resize(function() {
        $("header.slideshow").css({
            height: $(window).height() + "px"
        }), 

        $("#navigation").css({
            height: $(window).height() + 70 + "px"
        })

    }), 

    $("#intro-title").css({
        height: 1.078 * $("#intro-title").width() + "px"
    }), 

    $(".nav-wrap").css({
        left: $(window).width() / 2 - $(".nav-wrap").width() / 2 + "px"
    }), 

    $(".nav-wrap").css({
        top: $(window).height() / 2 - $(".nav-wrap").height() / 2 + "px"
    }), 

    $("#intro-title").css({
        left: $(window).width() / 2 - $("#intro-title").width() / 2 + "px"
    }), 

    $("#intro-title").css({
        top: $(window).height() / 2 - $("#intro-title").height() / 2 + "px"
    }), 

    $(window).resize(function() {
        $(".nav-wrap").css({
            left: $(window).width() / 2 - $(".nav-wrap").width() / 2 + "px"
        }), 

        $(".nav-wrap").css({
            top: $(window).height() / 2 - $(".nav-wrap").height() / 2 + "px"
        }), 

        $("#intro-title").css({
            left: $(window).width() / 2 - $("#intro-title").width() / 2 + "px"
        }), 

        $("#intro-title").css({
            top: $(window).height() / 2 - $("#intro-title").height() / 2 + "px"
        })

    }), 

    $("#nav-button").click(function() {
        $("#navigation").hasClass("closed") ? 
            (
                $("#navigation").removeClass("closed"), 
                $("#navigation").addClass("open"), 
                $(".nav-icon").removeClass("closed"), 
                $(".nav-icon").addClass("open") 
            ) : (
                $("#navigation").removeClass("open"), 
                $("#navigation").addClass("closed"), 
                $(".nav-icon").removeClass("open"), 
                $(".nav-icon").addClass("closed")
            )
    }), 

    $("#menu-primary-menu .menu-item").click(function() {
        $("#navigation").hasClass("closed") ? 
            (
                $("#navigation").removeClass("closed"), 
                $("#navigation").addClass("open"), 
                $(".nav-icon").removeClass("closed"), 
                $(".nav-icon").addClass("open")
            ) : (
                $("#navigation").removeClass("open"), 
                $("#navigation").addClass("closed"), 
                $(".nav-icon").removeClass("open"), 
                $(".nav-icon").addClass("closed")
            )
    })
});