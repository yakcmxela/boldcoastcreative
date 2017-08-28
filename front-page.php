<?php /*

Template Name: front-page

*/?>

<?php get_header(); ?>


<?php // this means everything after this will be php until I say so
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>

		
		<?php 

		$banner = get_field('front_page_banner');
		$logo = get_field('logo');
		$welcomeBannerTitle = get_field('welcomeBannerTitle');
		$webdev1 = get_field('webdev1');
		$webdev2 = get_field('webdev2');
		$webdev3 = get_field('webdev3');
		$photography1 = get_field('photography1');
		$photography2 = get_field('photography2');	
		$photography3 = get_field('photography3');
		$photography4 = get_field('photography4');
		$photography5 = get_field('photography5');
		$photography6 = get_field('photography6');
		$lpCliff = get_field('lpCliff');
		$lpWater = get_field('lpWater');
		$lpText = get_field('lpText');
		$lpBoldBlue = get_field('lpBoldBlue');
		$lpBoldGold = get_field('lpBoldGold');
		$wallImage1 = get_field('wallImage1');
		$wallImage2 = get_field('wallImage2');
		$wallImage3 = get_field('wallImage3');
		$wallImage4 = get_field('wallImage4');
		$wallImage5 = get_field('wallImage5');
		$lpWaterBox = get_field('lpWaterBox');
		$aboutBanner = get_field('aboutBanner');
		$webDevBanner = get_field('webDevBanner');
		$designBanner = get_field('designBanner');
		$marketingBanner = get_field('marketingBanner');
		$aboutSnippet = get_field('aboutSnippet');
		$aboutSnippetTitle = get_field('aboutSnippetTitle');
		$webDevSnippet = get_field('webDevSnippet');
		$webDevSnippetTitle = get_field('webDevSnippetTitle');
		$designSnippet = get_field('designSnippet');
		$designSnippetTitle = get_field('designSnippetTitle');
		$marketingSnippet = get_field('marketingSnippet');
		$marketingSnippetTitle = get_field('marketingSnippetTitle');
		$contactBanner = get_field('contactBanner');
		$contactBannerMobile = get_field('contactBannerMobile');
		$contactSnippet = get_field('contactSnippet');
		$contactSnippetTitle = get_field('contactSnippetTitle');
		$bannerCTA = get_field('bannerCTA');
		$aboutCTA = get_field('aboutCTA');
		$webDevCTA = get_field('webDevCTA');
		$designCTA = get_field('designCTA');
		$marketingCTA = get_field('marketingCTA');
		$contactCTA = get_field('contactCTA');
		$lightBlueTexture = get_field('lightBlueTexture');
		$lightGoldTexture = get_field('lightGoldTexture');
		$darkGoldTexture = get_field('darkGoldTexture');
		$darkBlueTexture = get_field('darkBlueTexture');
		$paperBackground = get_field('paperBackground');
		$cliff = get_field('cliff');
		$water = get_field('water');
		$jtImageWebDev = get_field('jtImageWebDev');
		$jtImageWebDevMobile = get_field('jtImageWebDevMobile');
		$jtImageMarketing = get_field('jtImageMarketing');
		$jtImageMarketingMobile = get_field('jtImageMarketingMobile');
		$jtImageDesign = get_field('jtImageDesign');
		$jtImageDesignMobile = get_field('jtImageDesignMobile');

		?>

<div class="the-page">

<!-- Top Banner -->

	<div class="banner" style="background-image: url('<?php echo $banner['url']; ?>');">
		<div class="title">
			<h1><?php echo $welcomeBannerTitle ?></h1>
		</div>
		<!-- <i class="fa fa-angle-double-down fa-3x" id="downArrowFP"></i> -->
	</div>
	<h1 class="mobileBannerText">Bold Coast Creative</h1>

	<!-- Background -->

	<div class="page-bg pt-5" style="background-image: url('<?php echo $webDevBanner['url']; ?>');">

	<!-- Intro -->

		<div class="container-fluid p-0 mw-12 py-3 py-3 py-3 m-auto">
			<div class="d-flex intro-row m-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/buoys.jpg');">
				<div class="d-flex flex-row justify-content-end align-items-end text-intro mx-1 p-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/buoys.jpg');">
					<div class="flex-column right">
						<div class="intro-line-container my-2">
							<span class="m-0 intro-line">Outstanding web products</span>
						</div>
						<div class="intro-line-container my-2">
							<span class="m-0 intro-line">Based in Maine.</span>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Web Dev Block -->

		<div class="container-fluid center px-0 py-5 mw-12 m-auto">
			<div class="m-auto p-5 px-5 bg-w lp-gallery-img block-shadow" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/wood.jpg');">
				<img class="img-desktop" src="<?php echo get_template_directory_uri(); ?>/img/Landing/mockups-large.png">
				<div class="style-text d-flex justify-content-end align-items-end">
					<span class="lp-img-header block-shadow-up">Web Development</span>
				</div>
			</div>
			<h2 class="lp-img-header-mobile mb-0">Web Development</h2>
			<div class="row mw-12 m-auto d-flex flex-row justify-content-center align-items-stretch">
				<div class="col-md-4 px-1 pt-3 d-flex align-self-stretch" style="flex: 1">
					<a href="<?php echo get_site_url(); ?>/web-development/">
						<div class="button-link p-2 block-shadow bg-w align-items-stretch">
							<img class="m-1 my-4" src="<?php echo get_template_directory_uri(); ?>/img/Icons/responsive.png">
							<h2 class="mb-1">Compatible</h2>
							<p class="left p-3">Respnsive web design optimized for all mobile devices and platforms. Structured with the ideal balance of design and functionality.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-3 px-1 d-flex align-self-stretch" style="flex: 1">
					<a href="<?php echo get_site_url(); ?>/web-development/">
						<div class="button-link p-2 block-shadow bg-w align-items-stretch">
							<img class="m-1 my-4" src="<?php echo get_template_directory_uri(); ?>/img/Icons/flexible.png">
							<h2 class="mb-1">Flexible</h2>
							<p class="left p-3">Pages built to adapt with your evolving needs. You'll be able to make changes to your website without hiring a developer.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 px-1 pt-3 d-flex align-self-stretch" style="flex: 1">
					<a href="<?php echo get_site_url(); ?>/about-us#pricing">
						<div class="button-link p-2 block-shadow bg-w align-items-stretch">
							<img class="m-1 my-4" src="<?php echo get_template_directory_uri(); ?>/img/Icons/dollar.png">
							<h2 class="mb-1">Affordable</h2>
							<p class="left p-3">Offering a competitive hourly rate, and will work within your budget to create the perfect website for your business.</p>
						</div>
					</a>
				</div>
			</div>
		</div>

	<!-- Photography -->

		<div class="container-fluid mw-12 center py-5 px-0 pb-0">
			<div class="photographyImage lp-gallery-img bottom-center block-shadow" style="background-image: url('<?php echo $photography1['url']; ?>');">
				<div class="style-text d-flex justify-content-end align-items-end">
					<span class="lp-img-header block-shadow-up">Photography</span>
				</div>
			</div> 
			<h2 class="lp-img-header-mobile mb-0">Photography</h2>
			<div class="row m-auto mw-12 justify-content-center">
			<div class="col-md-6 pt-3 px-1 push-md-6 img-album">
					<div class="d-flex flex-wrap">
						<div class="col-3 p-0">
							<div class="img-album-thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/globe.jpg');"></div>
						</div>
						<div class="col-3 p-0">
							<div class="img-album-thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/pencils.jpg');"></div>
						</div>
						<div class="col-3 p-0">
							<div class="img-album-thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/sunrise.jpg');"></div>
						</div>
						<div class="col-3 p-0">
							<div class="img-album-thumb Active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/gulls.jpg');"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 pull-md-6 pt-3 px-0 lpPhotoText">
					<a href="<?php echo get_site_url(); ?>/design-media/">
						<div class="d-flex flex-row align-items-center button-link p-2 block-shadow bg-w">
							<i class="fa fa-camera-retro fa-3x m-3"></i>
							<p class="left mb-0 p-3">Showcase your business and products. with our high end equipment and editing software.</p>
						</div>
					</a>
				</div>
			</div>
		</div>

	<!-- Style and Design -->

		<div class="container-fluid mw-12 center py-5 px-0 pb-0">
			<div class="lp-gallery-img bg-db left block-shadow m-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/cliff-text.png'); background-position: 10%">
				<div class="style-text d-flex justify-content-end align-items-end">
					<span class="lp-img-header block-shadow-up">Style &amp; Design</span>
				</div>
			</div>
			<h2 class="lp-img-header-mobile mb-0">Style &amp; Design</h2>
			<div class="row m-auto mw-12 d-flex flex-row justify-content-center align-items-stretch">
				<div class="col-md-4 pt-2 px-1">
					<a href="<?php echo get_site_url(); ?>/design-media/">
						<div class="button-link p-3 block-shadow bg-w">
							<img class="my-4 m-1" src="<?php echo get_template_directory_uri(); ?>/img/Icons/ux.png">
							<h2 class="mb-1">UX</h2>
							<p class="left p-3">Easy to navigate pages. Logical user flow.  Enhance your customer experience and promote conversions.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-3 px-1">
					<a href="<?php echo get_site_url(); ?>/design-media/">
						<div class="button-link p-2 block-shadow bg-w">
							<img class="my-4 m-1" src="<?php echo get_template_directory_uri(); ?>/img/Icons/branding.png">
							<h2 class="mb-1">Branding</h2>
							<p class="left p-3">Brilliant logos and unifying color pallettes. Seamlessly paired to fit your unique business identity.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-3 px-1">
					<a href="<?php echo get_site_url(); ?>/design-media/">
						<div class="button-link p-2 block-shadow bg-w">
							<img class="my-4 m-1" src="<?php echo get_template_directory_uri(); ?>/img/Icons/scale.png">
							<h2 class="mb-1">Balance</h2>
							<p class="left p-3">Find harmony in visual design principles: color, shape, texture, form, space, simplicity, and complexity.</p>
						</div>
					</a>
				</div>
			</div>
		</div>


	<!-- Digital Marketing Block -->

		<div class="center py-5 mw-12 m-auto">
			<div class="m-auto p-5 px-5 bg-w lp-gallery-img block-shadow" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Landing/waves.jpg');">
				<img class="img-desktop" src="<?php echo get_template_directory_uri(); ?>/img/Landing/marketing-3-mobile.png">
				<div class="style-text d-flex justify-content-end align-items-end">
					<span class="lp-img-header block-shadow-up">Digital Marketing</span>
				</div>
			</div>
			<h2 class="lp-img-header-mobile mb-0">Digital Marketing</h2>
			<div class="container-fluid mw-12">
				<div class="row d-flex flex-row justify-content-center align-items-stretch">
					<div class="col-md-4 px-1 pt-3">
						<a href="<?php echo get_site_url(); ?>/digital-marketing/">
							<div class="button-link p-2 block-shadow bg-w">
								<img class="my-4 m-1" src="<?php echo get_template_directory_uri(); ?>/img/Icons/seo.png">
								<h2 class="mb-1">SEO</h2>
								<p class="left p-3"> Get discovered on platforms like Google and Bing. Generate organic traffic through search engine optimization.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 pt-3 px-1">
						<a href="<?php echo get_site_url(); ?>/digital-marketing/">
							<div class="button-link p-2 block-shadow bg-w">
								<img class="my-4 m-1" src="<?php echo get_template_directory_uri(); ?>/img/Icons/ppc.png">
								<h2 class="mb-1">Pay Per Click</h2>
								<p class="left p-3">Put your business in front of the right audience. Data driven and cost-effective ads within your budget.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 px-1 pt-3">
						<a href="<?php echo get_site_url(); ?>/digital-marketing/">
							<div class="button-link p-2 block-shadow bg-w">
								<img class="my-4 m-1" src="<?php echo get_template_directory_uri(); ?>/img/Icons/socialmedia.png">
								<h2 class="mb-1">Social Media</h2>
								<p class="left p-3">Expand your reach on social networks with multimedia content creation and highly targeted advertising.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

	<!-- Contact Us Block -->

		<div class="contactBanner mt-5 py-5 bg-lb">
		<div class="d-flex flex-column align-items-center justify-content-center center">
			<h1 class="title-shadow">Have a project?</h1>
			<a href="<?php echo get_site_url(); ?>/contact-us">
				<div class="block-shadow contact-button m-5 bg-w">
					<h2 class="p-3 mb-1">Get started.</h2>
				</div>
			</a>
		</div>
	         
	</div>
</div>


<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>