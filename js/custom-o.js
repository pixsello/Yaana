 
    jQuery(document).on('ready', function(){
         "use strict";
        /* START MENU JS */
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.top-menu').addClass('menu-shrink');
            } else {
                $('.top-menu').removeClass('menu-shrink');
            }
        });			
        
        $('.nav li a').on('click', function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1500);
            e.preventDefault();
        });
        
        $(document).on('click','.navbar-collapse.in',function(e) {
            if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
                $(this).collapse('hide');
            }
        });				
        /* END MENU JS */
       
        /* FAQ JS */
        $(".faq-panel > .faq-title").on("click", function(){
            if($(this).hasClass('active')){
                $(this).removeClass("active");
                $(this).siblings('.faq-textarea').slideUp(200);
                $(".faq-panel > .faq-title i").removeClass("icofont-minus").addClass("icofont-plus");
            } else {
                $(".faq-panel > .faq-title i").removeClass("icofont-minus").addClass("icofont-plus");
                $(this).find("i").removeClass("icofont-plus").addClass("icofont-minus");
                $(".faq-panel > .faq-title").removeClass("active");
                $(this).addClass("active");
                $('.faq-textarea').slideUp(200);
                $(this).siblings('.faq-textarea').slideDown(200);
            }
        });
        /* END FAQ JS */
        
        

        
        
        /* START SCROLL EFFECT LINK */
        $('.slide-btn-white, .slide-btn-bordered, .default-button').on('click', function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 30
            }, 1500);
            e.preventDefault();
        });
        /* END SCROLL EFFECT LINK */
    });
    
    /* START PRELOADER */
    jQuery(window).on('load',function(){
        jQuery(".preloader-wrap").fadeOut(500);
    });
    /* END PRELOADER */



 