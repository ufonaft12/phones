jQuery(document).ready(function($){
	if(window.matchMedia('(max-width: 768px)').matches) {
		$('body').append('<div class="menu-bg"></div>');
		
		$('.mobile-menu-btn').click(function(e){
			e.preventDefault();
			$(this).toggleClass('active');
			$('#menu').toggleClass('active');
			$('.menu-bg').toggleClass('active');
			$('body').toggleClass('menu-active');
			$('#menu .menu-item-has-children.active').removeClass('active')	
		});
		
		$('#menu .menu-item-has-children').on('click', function(e){
			if (e.offsetX < 34) {
				if($(this).hasClass('active')) {
					$('#menu .menu-item-has-children.active').removeClass('active')
				} else {
					$('#menu .menu-item-has-children.active').removeClass('active')
					$(this).addClass('active');
				}
				e.preventDefault();
			}
		});
		
		$('.menu-bg').click(function(){
			$('#menu .menu-item-has-children.active').removeClass('active')
			$(this).toggleClass('active');
			$('#menu').toggleClass('active');
			$('.mobile-menu-btn').toggleClass('active');
			$('body').toggleClass('menu-active');
		});
	}

    $(".tab_item").not(":first").hide();
    $(".carousel-wrap-mobile .tab").click(function() {
        $(".carousel-wrap-mobile .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".tab_item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");

    $('.carousel-mobile').owlCarousel({
		rtl: true,
		items: 5,
        loop: true,
		autoplay: true,
        autoplayTimeout: 7000,
        nav: true,
		dots: false,
        smartSpeed: 700,
        navText: ['<span class="lnr lnr-chevron-left"></span>', '<span class="btn-text">קטלוג מוצרים</span><span class="lnr lnr-chevron-right"></span>'],
		responsiveClass: true,
		responsive: {
		    0: {
		        items: 2
            },
            1200: {
		    	items: 4
			},
			1450: {
		    	items: 5
			}
        }
    });

    $('.carousel-reviews').owlCarousel({
        rtl: true,
        items: 1,
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 10000,
        smartSpeed: 700
    });

    $('.top').click(function () {
		$('html, body').stop().animate({scrollTop: 0}, 'slow');
    })
});