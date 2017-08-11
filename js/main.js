$(document).ready(function() {

	// Navigation

		$('.navBars').click(function() {
			$('.mobileMenuMainContainer').toggleClass('Active');
		});

	// // Colorize photos on scroll

	// 	$(window).on('scroll', function() {
	// 		var topLocation = $(window).scrollTop();
	// 		var botLocation = topLocation + $(window).height();
	// 		var elemTop = $('.lp-gallery-img').offset();
	// 		var elemTop = elemTop.top;
	// 		var fadeLocation = elemTop + 500;

	// 		if (botLocation > fadeLocation) {
	// 			$('.eff-gold').addClass('Active');
	// 			$('.a-2').addClass('Active');
	// 			$('.a-3').addClass('Active');
	// 		}
	// 	});

	// // Size photos based on viewport

	// 	function subpageImageSize() {
	// 		var image = $('.lp-gallery-img');
	// 		var imageWidth = image.width();
	// 		var text = $('.lp-gallery-text');
	// 		var textHeight = text.outerHeight();

	// 		$(image).css('height', imageWidth);
	// 		if (textHeight > imageWidth) {
	// 			$(image).css('height', textHeight);
	// 		} else if (imageWidth > 600 ) {
	// 			$(image).css('max-height', 400);
	// 		}
	// 	}

	// 	subpageImageSize();
		
	// 	$(window).resize(function() {
	// 		subpageImageSize();
	// 	});

	// Capabilities Page

		$('#capContactButton').mouseenter(function() {
			$(this).hide();
			$('#capContactButtonActive').show();
		})

		$('#capContactButtonActive').mouseleave(function() {
			$(this).hide();
			$('#capContactButton').show();
		})

	// Contact Page

		$('#contactButtonDesktop').click(function() {
			$('.contactForm').toggleClass('Active');
		});

		$('#contactClose').click(function() {
			$('.contactForm').fadeOut();
		});


	// Front Page

		$('#aboutButton').mouseenter(function() {
			$(this).hide();
			$('#aboutHoverButton').show();
		});

		$('#aboutHoverButton').mouseleave(function() {
			$(this).hide();
			$('#aboutButton').show();
		});

		$('#webDevButton').mouseenter(function() {
			$(this).hide();
			$('#webDevHoverButton').show();
		});

		$('#webDevHoverButton').mouseleave(function() {
			$(this).hide();
			$('#webDevButton').show();
		});

		$('#designButton').mouseenter(function() {
			$(this).hide();
			$('#designHoverButton').show();
		});

		$('#designHoverButton').mouseleave(function() {
			$(this).hide();
			$('#designButton').show();
		});

		$('#marketingButton').mouseenter(function() {
			$(this).hide();
			$('#marketingHoverButton').show();
		});

		$('#marketingHoverButton').mouseleave(function() {
			$(this).hide();
			$('#marketingButton').show();
		});

});