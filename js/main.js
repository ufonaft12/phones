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
});