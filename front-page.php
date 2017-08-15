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

	<div class="page-bg" style="background-image: url('<?php echo $webDevBanner['url']; ?>');">

	<!-- Web Dev Block -->

		<div class="d-xl-flex justify-content-center align-items-center p-xl center">
			<div class="flex-item p-4">
				<img class="img-desktop website-mockups" src="<?php echo $webdev1['url']; ?>">
			</div>
			<div class="flex-item left-lg">
				<h2 class="m-0"><?php echo $webDevSnippetTitle ?></h2>
				<h2>All devices.</h2>
				<p><?php echo $webDevSnippet ?></p>
				<a href="/website-development/" title="Link to Web Development Page">
					<div class="call-to-action" id="webDevButton" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>');">
						<p><?php echo $webDevCTA ?></p>
					</div>
					<div class="call-to-action" id="webDevHoverButton" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>');">
						<p><?php echo $webDevCTA ?></p>
					</div>
				</a>
			</div>
		</div>

	<!-- Style and Design -->

		<a href="/design-media/">
			<div class="img-desktop-container">
				<img class="img-desktop" src="<?php echo $lpCliff['url']; ?>">
				<img id="lp-bold-blue" class="lp-bold" src="<?php echo $lpBoldBlue['url']; ?>">
				<img id="lp-bold-gold" class="lp-bold" src="<?php echo $lpBoldGold['url']; ?>">
				<div id="lp-water" src="<?php echo $lpWater['url']; ?>"></div>
			</div>
			<img id="lp-bold-mobile" class="lp-bold" src="<?php echo $lpBoldBlue['url']; ?>">
		</a>

	<!-- Photography -->

		<div class="container-fluid lp-gallery p-xl">
			<div class="row no-gutters">
				<div class="col-12 no-p lp-gallery-img bottom-center eff-gold" style="background-image: url('<?php echo $photography1['url']; ?>');">
				</div> 
				<div class="col-12 no-p lp-gallery-img center-center eff-gold" style="background-image: url('<?php echo $photography2['url']; ?>');">
					<div class="lp-gallery-txt-right">
						<h2><a href="design-media/"><span>Showcase Your Products</span></a></h2>
					</div>
				</div> 
			</div>
		</div>

	<!-- Digital Marketing Block -->

		<div class="d-xl-flex justify-content-center align-items-center px-xl center" style="padding-top: 0px; padding-bottom: 0px">
			<div class="flex-item p-4">
				<img class="img-desktop mw-9" src="<?php echo $jtImageMarketing['url'] ?>">
			</div>
			<div class="flex-item mw-6 left-lg">
				<h2><?php echo $marketingSnippetTitle ?></h2>
				<p><?php echo $marketingSnippet ?></p>
				<a href="/digital-marketing/" title="Link to Digital Marketing Page">
					<div class="call-to-action" id="marketingButton" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>');">
						<p><?php echo $marketingCTA ?></p>
					</div>
					<div class="call-to-action" id="marketingHoverButton" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>');">
						<p><?php echo $marketingCTA ?></p>
					</div>
				</a>
			</div>
		</div>

	<!-- Contact Us Block -->

		<div class="contactBanner py-xl" style="background-image: url('<?php echo $contactBanner['url']; ?>');">
			<div class="snippet" id="contactSnippet">
				<h2 style="margin-bottom: 0px"><?php echo $contactSnippetTitle ?></h2>
			</div>
			<div id="contactFormFP" style="color: white"><?php echo do_shortcode('[contact-form-7 id="670" title="Contact Us"]'); ?>
			</div>
		</div>
	         
	</div>
</div>


<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>