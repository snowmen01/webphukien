jQuery(document).ready(function() {

    jQuery('#slide-home').slick({
        infinite: true,
        autoplay: false,
        autoplaySpeed: 6000,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 1,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,

        prevArrow: '<button type="button " class="slick-prev "><span></span></button>',
        nextArrow: '<button type="button " class="slick-next "><span></span></button>',

    });

    jQuery('#slide-home').on('touchstart', e => {
        jQuery('#slide-home').slick('slickPlay');
    });

});
if (jQuery('#product-image-gallery-thumb').length) {
    jQuery('#product-image-gallery-thumb').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '#product-image-gallery',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        arrows: true,
        vertical: true,
        centerPadding: '0px',
        infinite: false,
    });
}

if (jQuery('#product-image-gallery').length) {
    jQuery('#product-image-gallery').slick({
        centerMode: false,
        centerPadding: '0px',
        arrows: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '#product-image-gallery-thumb',
        speed: 300,
        infinite: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                vertical: false,
                verticalSwiping: false,
                fade: false,
            }
        }]
    });
}
if (window.innerWidth > 768) {
    if (jQuery('#product-image-gallery .item').length) {
        jQuery('#product-image-gallery .item').zoom({
            touch: false
        });
    }
}
if (jQuery('.detailt-ship').length) {
    jQuery('.detailt-ship').slick({
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 1,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: true,
        adaptiveHeight: true
    });
}
if (jQuery('#block-related').length) {
    jQuery('#block-related').slick({
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 5,
        arrows: true,
        infinite: false,
        responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: true,
                centerMode: false,
                centerPadding: '0px',
                slidesToShow: 4
            }
        }, {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '0px',
                slidesToShow: 3,
                dots: true,
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 1,
                dots: true,
                infinite: true,
            }
        }]
    });
}
if (jQuery('.header-promotion .slide').length) {
    jQuery('.header-promotion .slide').slick({
        infinite: false,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 1,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: true,
        adaptiveHeight: true
    });
}
jQuery(".header-account .btn-header-account ").on('click', function() {
    jQuery(this).parent().toggleClass('active');
    jQuery('html').click(function(event) {
        var target = jQuery(event.target);
        if (target.parents('.header-account').length == 0) {
            jQuery(".header-account ").removeClass("active ");
        }
    });
});
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 17) {
        jQuery('#header').addClass("header-fix-top");
    } else {
        jQuery('#header').removeClass("header-fix-top");
    }
});