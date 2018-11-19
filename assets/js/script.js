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
        $('.mobile-prototype').hide().css('opacity', '0')
    });


    /* mobile proto */
    var counter = -1;
    var path = '/assets/img/mobile/';
    var files = [
        '1.jpg',
        '2.jpg',
        '3.jpg',
        '4.jpg'
    ];

    var images = [];
    for (var i = 0; i < files.length; i++) {
        images[i] = new Image();
        images[i].src = path + files[i];
    }

    function changePicture() {
        $('.mobile-prototype__description').text(counter + 1 + '/' + files.length);
        $('.mobile-prototype__image').css('background-image', 'url(' + path + files[counter] + ')');
    }

    function nextMobileImage() {
        counter++;

        if (counter === files.length) counter = 0;

        changePicture();
    }

    function prevMobileImage() {
        counter--;

        if (counter < 0) counter = files.length - 1;

        changePicture();
    }

    function toggleMobilePrototype(isShow) {
        if (isShow) {
            $('.mobile-prototype')
                .show()
                .animate({'opacity': '1'}, 600);
        } else {
            $('.mobile-prototype')
                .animate({'opacity': '0'}, 600, function () {
                    $('.mobile-prototype').hide();
                });
        }
    }

    $('.mobile-prototype__arrow--right').on('click', nextMobileImage);
    $('.mobile-prototype__arrow--left').on('click', prevMobileImage);
    $('.mobile-prototype__close').on('click', function () {
        toggleMobilePrototype(false);
    });
    $('.android-btn').on('click', function () {
        toggleMobilePrototype(true);
    });

    $(document).on('keyup', function (e) {
        if ($('.mobile-prototype').is(':visible')) {
            if (e.keyCode === 37) prevMobileImage();
            if (e.keyCode === 39) nextMobileImage();
            if (e.keyCode === 27) toggleMobilePrototype(false);
        }
    });

    nextMobileImage();

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

    $(".backed-by-next").click(function () {
        owlBB.trigger('owl.next');
    });

    $(".backed-by-prev").click(function () {
        owlBB.trigger('owl.prev');
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


// carousel

$(document).ready(function () {
    $('#accelerateForm').submit(sendEmail);
    $('#subscribeForm').submit(subscribe);
});

function sendEmail() {
    $('.message-warning').fadeOut();
    $('.accelerate-form').addClass('accelerate-form--loading');

    $.ajax({
        type: "POST",
        url: "sendEmail.php",
        data: $('#accelerateForm').serialize(),
        success: function (msg) {
            if (msg == 'OK') {
                $('.message-success').fadeIn();
                $('#accelerateForm').fadeOut();
            }
            else {
                $('.message-warning').html(msg);
                $('.message-warning').fadeIn();
                $('.accelerate-form').removeClass('accelerate-form--loading');
            }
        },
        error: function(msg) {
            $('.message-warning').html(msg);
            $('.message-warning').fadeIn();
            $('.accelerate-form').removeClass('accelerate-form--loading');
        }
    });

    return false;
}

function subscribe() {
    $('.message-warning').fadeOut();
    $('.subscribe-form').addClass('subscribe-form--loading');

    $.ajax({
        type: "POST",
        url: "subscribe.php",
        data: $('#subscribeForm').serialize(),
        success: function (msg) {
            if (msg == 'OK') {
                $('.message-success').fadeIn();
                $('#subscribeForm').fadeOut();
            }
            else {
                $('.message-warning').html(msg);

                $('.message-warning').fadeIn();
                $('.subscribe-form').removeClass('subscribe-form--loading');
            }
        },
        error: function(msg) {
            $('.message-warning').html(msg);
            $('.message-warning').fadeIn();
            $('.subscribe-form').removeClass('subscribe-form--loading');
        }
    });

    return false;
}