$v = jQuery.noConflict();

$v(document).ready(function() {

    $v(".slideshow").css({
        height: $v(window).height() + "px"
    }), 

    $v("#intro-title").css({
        height: 1.078 * $v("#intro-title").width() + "px"
    }), 

    $v("#intro-title").css({
        left: $v(window).width() / 2 - $v("#intro-title").width() / 2 + "px"
    }), 

    $v("#intro-title").css({
        top: $v(window).height() / 2 - $v("#intro-title").height() / 2 + "px"
    }), 

    $v(window).resize(function() {

        $v(".slideshow").css({
            height: $v(window).height() + "px"
        })

        $v("#intro-title").css({
            left: $v(window).width() / 2 - $v("#intro-title").width() / 2 + "px"
        }), 

        $v("#intro-title").css({
            top: $v(window).height() / 2 - $v("#intro-title").height() / 2 + "px"
        })

    })
});
//# sourceMappingURL=home-video.js.map
