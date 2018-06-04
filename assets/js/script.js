// Preloader //

jQuery(document).ready(function ($) {

    $(window).load(function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });

        var fbWidth = $('.facebook-container').width();

        var fbIframe = '\
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhereyougothefirst%2F&tabs=timeline&width=' + fbWidth +'&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" \
            width="' + fbWidth +'" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" \
            allowTransparency="true" allow="encrypted-media"></iframe>';

        $('.facebook-container').html(fbIframe);
    });

});


// Closes the sidebar menu
$("#menu-close").click(function (e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Scrolls to the selected menu item on the page
$(function () {
    $('a.page-link[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

// wow

// new WOW().init();

// carousel

$(document).ready(function () {

    var carouselConfig = {
        autoPlay: false,
        pagination: false,
        stopOnHover: true,
        slideBy: 1,
        items: 4,
        loop: true
    };

    var owl = $("#partnerLinks");
    var owlBB = $("#backedByLinks");

    owl.owlCarousel(carouselConfig);

    carouselConfig.items = 3;
    owlBB.owlCarousel(carouselConfig);

    // Custom Navigation Events
    $(".next").click(function () {
        owl.trigger('owl.next');
    });

    $(".prev").click(function () {
        owl.trigger('owl.prev');
    });

    //var advisers = $('.team-member-row--advisers');
    //advisers.owlCarousel(carouselConfig);

});

// Testimonial

$(document).ready(function () {

    $("#review").owlCarousel({

        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});

// Set Header Background

$(window).scroll(function () {
    var sticky = $('.sticky'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});

// Team overlay

// $(document).ready(function(){
//   $(".img-overlay").hover(function(){
//     $(".overlay").toggleClass("overlay_hover");
//   });

// });
