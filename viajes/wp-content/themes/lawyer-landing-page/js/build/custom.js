jQuery(document).ready(function($) {
    var rtl, mrtl;

    if (llp_data.rtl == '1') {
        rtl = true;
        mrtl = false;
    } else {
        rtl = false;
        mrtl = true;
    }

    /* Masonry for faq */
    if ($('.page-template-template-home').length > 0) {

        $('.rara-masonry').imagesLoaded(function() {
            $('.rara-masonry').masonry({
                itemSelector: '.col',
                isOriginLeft: mrtl
            });
        });

        // The slider being synced must be initialized first
        $(".testimonial-slider").owlCarousel({
            margin: 30,
            nav: true,
            dots: false,
            mouseDrag: false,
            rtl: rtl,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });

    }

    // custom scrollbar
    $(".team .col .img-holder .text-holder").niceScroll({
        cursorcolor: "#000000",
        cursorborder: "0",
        cursorwidth: "3px"
    });

    $(".practice-area .box .text-holder").niceScroll();

    $(".why-us .box .text-holder").niceScroll();

    /** Ajax cal for testimonial slider in home page */
    $('.testimonial-slider .testimonial-slide').click(function() {
        var id = $(this).attr('id').split('-').pop();

        $('.testimonial-slider .testimonial-slide').removeClass('testimonial-active');
        $(this).addClass('testimonial-active');

        if (typeof llp_data !== 'undefined') {
            //Ajax Call
            $.ajax({
                url: llp_data.url,
                data: { 'action': 'lawyer_landing_page_testimonial', 'post_id': id },
                beforeSend: function() {
                    $('.testimonial-content').addClass('loading');
                },
                success: function(data) {
                    $('.testimonial-content').html(data);
                }
            }).done(function() {
                $('.testimonial-content').removeClass('loading');
            });
        }
    });

    //mobile-menu
    var winWidth = $(window).width();

    if(winWidth < 1025){
        $('.menu-opener').click(function(){
            $('body').addClass('menu-open');

            $('.btn-close-menu').click(function(){
                $('body').removeClass('menu-open');
            });

            $('.overlay').click(function(){
                $('body').removeClass('menu-open');
            });
        });

        $('.main-navigation').prepend('<div class="btn-close-menu"></div>');

        $('.main-navigation ul .menu-item-has-children').append('<div class="angle-down"></div>');

        $('.main-navigation ul li .angle-down').click(function(){
            $(this).prev().slideToggle();
            $(this).toggleClass('active');
        });
    }
});
