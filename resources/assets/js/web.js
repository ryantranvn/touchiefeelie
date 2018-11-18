$(document).ready( function() {

    var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;
    // function displayWindowSize() {
    //     screenWidth = window.innerWidth;
    //     screenHeight = window.innerHeight;
    // };
    // window.onresize = displayWindowSize;
    // window.onload = displayWindowSize;
    
    $('body').on('click', '.hamburger', function() {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
        }
        else {
            $(this).addClass('is-active');    
        }
    });

    function initHome() {
        
    }
    
// slider
    initHome();
    $(window).resize( function() {
        initHome();
    });
    // $(window).on('load', function() {
    //     initHome();
    // });
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false
    });

/* home */
    if ($('.home-page').length>0) {
        console.log(window.devicePixelRatio);
        console.log(window.screen.availWidth)
        
    }


/* about us*/
    if ($('.aboutus-page').length>0) {
        
    }

/* contact-page */    
    if ($('.contact-page').length>0) {
        
    }

    setTimeout(function () {
        $("html, body").animate({ scrollTop: 0 }, 600, function() {
            $('.page-loader-wrapper').fadeOut();
        });
    }, 50);
});