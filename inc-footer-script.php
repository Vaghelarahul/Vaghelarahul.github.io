<script src="asset/js/jquery-3.5.1.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/gototop.js"></script>
<script src="asset/jarallax/jarallax.js"></script>
<script src="asset/js/aos.js"></script>
<script src="asset/js/swiper-bundle.min.js"></script>
<script>
$(document).ready(function(){
	$('.dropdown-toggle').dropdown()
	///// Home page Banner slider
    var sitebanner = new Swiper('.site-banner-js', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		speed: 400,
		autoplayDisableOnInteraction: false,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
    });
	
	
	/////// Three slider 
    var threegrid = new Swiper('.three-grid-slider-js', {
		slidesPerView: 3,	
		spaceBetween: 15,
		loop: true,
		//centeredSlides: true,
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
		},
		navigation: {
			nextEl: '.swiper-next-btn',
			prevEl: '.swiper-back-btn',
		},
		breakpoints: {
		  320: {
			slidesPerView: 1,
		  },
		  580: {
			slidesPerView: 2,
		  },
		  769: {
			slidesPerView: 3,
		  }
		}
    });
	
	
	///// Gallery slider
    var gallerySlider = new Swiper('.gallery-slider-js', {
		slidesPerView: 2,
		centeredSlides: true,
		paginationClickable: true,
		loop: true,
		spaceBetween: 8,
		slideToClickedSlide: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
		  320: {
			slidesPerView: 1,
		  },
		  740: {
			slidesPerView: 2,
		  }
		}
    });
	
	/// Aos Animation
	AOS.init({
	   once: true
	})
		
	//// Jarallax Animation
	jarallax(document.querySelectorAll('.jarallax'));
	
	
	// Global width getting veriable
	var wnd_width = $(window).width();
	
	
	// Start Show hide desktop and mobile menu js
	$('.nav_click_js').click(function(){
		$('.nav_click_js').toggleClass('open');
		if(wnd_width > 1024){
			$('.site_navigation').toggleClass('shohide_menu');
		}else{
			$('.site_navigation').toggleClass('right_0');
			$('.black_show').toggleClass('black_show_visible');
		}
	});
	
	if(wnd_width < 1024){
		$('.menu_wrp > ul > li > a').on("click", function() {
			$(this).siblings('ul').stop().slideToggle();
			$(this).parent('li').siblings('li').find('ul').stop().slideUp();
			
			return false;
		})	
	}
	// End Show hide desktop and mobile menu js


	// Start sticky menu js
	$(window).on("scroll", function() {
		stickyHeader();
		$('.nav_click_js').removeClass('open');
		$('.site_navigation').removeClass('shohide_menu right_0');
		$('.black_show').removeClass('black_show_visible');
		$('.nav_click_js').click();
	})
	
	function stickyHeader(){
		var scrolling = $(window).scrollTop();
		
		if(scrolling > 150){
			$('.header_menu').addClass('sticky_header');
		}else{
			$('.header_menu').removeClass('sticky_header');
		}
	}
	
	stickyHeader();
	// End sticky menu js
	
	
	// Page smooth scroll
	
	$('.menu_wrp ul li a[href*="#"]').on('click', function (e) {
	  e.preventDefault()

	  $('html, body').animate(
		{
		  scrollTop: $($(this).attr('href')).offset().top - 20,
		},
		1000,
		'linear'
	  )
	})
});
</script>