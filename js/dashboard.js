var $ = jQuery.noConflict();
$(document).ready(function($) {
    "use strict";
    $('.sidebar-toggler').click(function() {
        if ( $('body').hasClass("leftmenuhide")) {
             $('body').removeClass("leftmenuhide");

        } else {
             $('body').addClass("leftmenuhide");

        }
        if ($('body').hasClass("leftmenuhide")) {

            $('.adminlogo a img').attr('src', 'images/menulogo.png');

        } else {
            $('.adminlogo a img').attr('src', 'images/logomain.png');

        }
    });




    // $('.closeicon').click(function() {
    //     $('.rightmenu').removeClass('righttogle');
    //     $('.maincontent').removeClass('overlayright');
    //     $('body').removeClass('scrollhide');
    //
    // });
    // $('.leftmenutoggle').click(function(e) {
    //     $('.leftmenu').toggleClass('leftmenuactive');
    //     $('.overlaymenu').toggleClass('active');
    //     $('#header1').toggleClass('blur');
    //     $('.page-container').toggleClass('blur');
    //     $('body').toggleClass('scrollhide');
    //     e.stopPropagation();
    // });
    // $('.leftmenu').click(function(e) {
    //     e.stopPropagation();
    // });
    // $('body').click(function(e) {
    //     $('.leftmenu').removeClass('leftmenuactive');
    //     $('.overlaymenu').removeClass('active');
    //     $('#header1').removeClass('blur');
    //     $('.page-container').removeClass('blur');
    //     $('body').removeClass('scrollhide');
    //     e.stopPropagation();
    // });

    $('.leftmenutoggle').click(function(e) {
        $('.leftmenu').addClass('leftmenuactive');
         $('.overlaymenu').addClass('active');
        e.stopPropagation();
    });
    $('body').click(function(e) {
        $('.leftmenu').removeClass('leftmenuactive');
         $('.overlaymenu').removeClass('active');
         e.stopPropagation();

    });
    $('.leftmenu').click(function(e) {
         e.stopPropagation();
     });


    return false;
});
