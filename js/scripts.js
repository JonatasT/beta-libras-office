jQuery(function ($) {

    'use strict';
    
    // -------------------------------------------------------------
    // WOW JS
    // -------------------------------------------------------------

    (function () {
        new WOW().init();
    }());


    //Our advantages wrapper tab
    //changes section class for different backgrounds

    $('.css-tab').on('shown.bs.tab', function ( e ) {
        $(e.target).closest( ".advantages-wrapper" )
            .removeClass($(e.relatedTarget).text().toLowerCase())
        .addClass($(e.target).text().toLowerCase());
    });


    // -------------------------------------------------------------
    // CSS Handover Work Carousel
    // -------------------------------------------------------------

    //prevent bootstrap carousel to autorun
    (function () {
		$('#css-handover-carousel').carousel({
			pause: true,
			interval: false
		});
    }());



    // -----------------------------------------------------------------
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    // ------------------------------------------------------------------

    (function () {
	    $('a.page-scroll').on('click', function(event) {
	        var $anchor = $(this);
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1500, 'easeInOutExpo');
	        event.preventDefault();
	    });
    }());



    // -------------------------------------------------------------
    // OffCanvas
    // -------------------------------------------------------------

    (function () {
        $('button.navbar-toggle').HippoOffCanvasMenu({

        documentWrapper: '#st-container',
        contentWrapper : '.st-content',
        position       : 'hippo-offcanvas-left',    // class name
        // opener         : 'st-menu-open',            // class name
        effect         : 'slide-in-on-top',             // class name
        closeButton    : '#off-canvas-close-btn',
        menuWrapper    : '.offcanvas-menu',                 // class name below-pusher
        documentPusher : '.st-pusher'

        });
    }());

    

    // -------------------------------------------------------------
    // Shuffle
    // -------------------------------------------------------------

    (function () {
    
        /* initialize shuffle plugin */
        var $grid = $('#grid');

        $grid.shuffle({
            itemSelector: '.portfolio-item' // the selector for the items in the grid
        });

        /* reshuffle when user clicks a filter item */
        $('#filter a').click(function (e) {
            e.preventDefault();

            // set active class
            $('#filter a').removeClass('active');
            $(this).addClass('active');

            // get group name from clicked item
            var groupName = $(this).attr('data-group');

            // reshuffle grid
            $grid.shuffle('shuffle', groupName );
        });
    
    }());



    // -----------------------------------------------------------------
    // jQuery to collapse the navbar on scroll
    // ------------------------------------------------------------------

    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });





    // ------------------------------------------------------------------
    // jQuery for back to Top
    // ------------------------------------------------------------------

    (function(){

          $('html, body').append('<div id="toTop" class="btn btn-primary"><i class="fa fa-chevron-up"></i></div>');

            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            }); 

        $('#toTop').on('click', function(){
            $("html, body").animate({ scrollTop: -1000 }, 1000);
            return false;
        });

    }());


    // ----------------------------------------------------------------
    //  Dropdown menu
    // ----------------------------------------------------------------


    (function () {

      
        function getIEVersion() {
            var match = navigator.userAgent.match(/(?:MSIE |Trident\/.*; rv:)(\d+)/);
            return match ? parseInt(match[1]) : false;
        }


        if( getIEVersion() ){
            $('html').addClass('ie'+getIEVersion());
        }
       

        if( $('html').hasClass('ie9') || $('html').hasClass('ie10')  ){

            $('.submenu-wrapper').each(function(){

               $(this).addClass('no-pointer-events');

            });

        }


        var timer;

        $('li.dropdown').on('mouseenter', function (event) {


            event.stopImmediatePropagation();
            event.stopPropagation();

            $(this).removeClass('open menu-animating').addClass('menu-animating');
            var that = this;


            if (timer) {
                clearTimeout(timer);
                timer = null;
            }


            timer = setTimeout(function () {

                $(that).removeClass('menu-animating');
                $(that).addClass('open');

            }, 300);   // 300ms as animation end time


        });

        // on mouse leave

        $('li.dropdown').on('mouseleave', function (event) {

            var that = this;

            $(this).removeClass('open menu-animating').addClass('menu-animating');


            if (timer) {
                clearTimeout(timer);
                timer = null;
            }

            timer = setTimeout(function () {

                $(that).removeClass('menu-animating');
                $(that).removeClass('open');

            }, 300);  // 300ms as animation end time

        });

    }());
}); // JQuery end