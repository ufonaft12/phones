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

    $('.carousel-mobile').owlCarousel({
		rtl: true,
		items: 5,
        loop: true,
		autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
		dots: false,
        smartSpeed: 700,
        navText: ['<span class="btn-text">קטלוג מוצרים</span><span class="lnr lnr-chevron-right"></span>', '<span class="lnr lnr-chevron-left"></span>'],
		responsiveClass: true,
		responsive: {
		    0: {
		        items: 1
            },
			768: {
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
        autoplayTimeout: 7000,
        smartSpeed: 700
        // navText: ['קטלוג מוצרים <i class="fas fa-chevron-right"></i>', '<i class="fas fa-chevron-left"></i>'],
        // responsiveClass: true,
        // responsive: {
        //     0: {
        //         items: 1
        //     },
        //     768: {
        //         items: 2
        //     },
        //     1200: {
        //         items: 4
        //     },
        //     1450: {
        //         items: 5
        //     }
        // }
    });
});