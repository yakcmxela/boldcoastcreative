<?php /*

Template Name: front-page

*/?>

<link href="/style.css" type="text/css" rel="stylesheet" />
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

<!-- Top Banner -->

<div class="banner" style="background-image: url('<?php echo $banner['url']; ?>');">
	<div class="title">
		<h1><?php echo $welcomeBannerTitle ?></h1>
	</div>
	<!-- <i class="fa fa-angle-double-down fa-3x" id="downArrowFP"></i> -->
</div>
<h1 class="mobileBannerText">Bold Coast Creative</h1>

<!-- First Block (about) -->
<div class="d-flex justify-content-center">
	<img class="" src="<?php echo $logo['url']; ?>">
	<h1><?php echo $aboutSnippetTitle ?></h1>
	<p><?php echo $aboutSnippet ?></p>
</div>


<div class="jumbotron" id="aboutJT" style="background-image: url('<?php echo $aboutBanner['url']; ?>');">
	<div class="blockContents">
	<img class="logo" src="<?php echo $logo['url']; ?>">
		<div class="snippet">
			<h1><?php echo $aboutSnippetTitle ?></h1>
			<p><?php echo $aboutSnippet ?></p>
		</div>
		<div class="buttonContainer">
			<a href="/about-us/" title="Link to About Us Page">
				<div class="CTA" id="aboutButtonMobile" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>');">
					<p><?php echo $aboutCTA ?></p>
				</div>
			</a>
			<a href="/about-us/" title="Link to About Us Page">
				<div class="CTA" id="aboutButton" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>');">
					<p><?php echo $aboutCTA ?></p>
				</div>
				<div class="CTA" id="aboutHoverButton" style="background-image: url('<?php echo $lightGoldTexture['url']; ?>');">
					<p><?php echo $aboutCTA ?></p>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- Web Dev Block -->

<div class="jumbotron" id="webDevJT" style="background-image: url('<?php echo $webDevBanner['url']; ?>');">
	<div class="blockContents">
		<img class="jtImage" src="<?php echo $jtImageWebDev['url'] ?>">
		<img class="jtImageMobile" src="<?php echo $jtImageWebDevMobile['url'] ?>">
		<div class="snippet">
			<h1><?php echo $webDevSnippetTitle ?></h1>
			<p><?php echo $webDevSnippet ?></p>
		</div>
		<div class="buttonContainer">
			<a href="/website-development/" title="Link to Web Development Page">
				<div class="CTA" id="webDevButtonMobile" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>');">
					<p><?php echo $webDevCTA ?></p>
				</div>
			</a>
			<a href="/website-development/" title="Link to Web Development Page">
				<div class="CTA" id="webDevButton" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>');">
					<p><?php echo $webDevCTA ?></p>
				</div>
				<div class="CTA" id="webDevHoverButton" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>');">
					<p><?php echo $webDevCTA ?></p>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- Design & Media Block -->

<div class="jumbotron" id="designJT" style="background-image: url('<?php echo $designBanner['url']; ?>');">
	<div class="blockContents" id="designBlock">
		<img class="jtImage" id="designImage" src="<?php echo $jtImageDesign['url'] ?>">
		<img class="jtImageMobile" src="<?php echo $jtImageDesignMobile['url'] ?>">
		<div class="snippet" id="designSnippet">
			<h1><?php echo $designSnippetTitle ?></h1>
			<p><?php echo $designSnippet ?></p>
		</div>
		<div class="buttonContainer">
			<a href="/design-media/" title="Link to Design and Media Page">
				<div class="CTA" id="designButtonMobile" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>');">
					<p><?php echo $designCTA ?></p>
				</div>
			</a>
			<a href="/design-media/" title="Link to Design and Media Page">
				<div class="CTA" id="designButton" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>');">
					<p><?php echo $designCTA ?></p>
				</div>
				<div class="CTA" id="designHoverButton" style="background-image: url('<?php echo $lightGoldTexture['url']; ?>');">
					<p><?php echo $designCTA ?></p>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- Digital Marketing Block -->

<div class="jumbotron" id="marketingJT" style="background-image: url('<?php echo $marketingBanner['url']; ?>');">
	<div class="blockContents">
		<img class="jtImage" src="<?php echo $jtImageMarketing['url'] ?>">
		<img class="jtImageMobile" src="<?php echo $jtImageMarketingMobile['url'] ?>">
		<div class="snippet">
			<h1><?php echo $marketingSnippetTitle ?></h1>
			<p><?php echo $marketingSnippet ?></p>
		</div>
		<div class="buttonContainer">
			<a href="/digital-marketing/" title="Link to Digital Marketing Page">
				<div class="CTA" id="marketingButtonMobile" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>');">
					<p><?php echo $marketingCTA ?></p>
				</div>
			</a>
			<a href="/digital-marketing/" title="Link to Digital Marketing Page">
				<div class="CTA" id="marketingButton" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>');">
					<p><?php echo $marketingCTA ?></p>
				</div>
				<div class="CTA" id="marketingHoverButton" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>');">
					<p><?php echo $marketingCTA ?></p>
				</div>
			</a>
		</div>
	</div>
</div>


<!-- Contact Us Block -->

<div class="contactBanner" id="contactBannerDesktop" style="background-image: url('<?php echo $contactBanner['url']; ?>');">
	<div class="snippet" id="contactSnippet">
		<h1><?php echo $contactSnippetTitle ?></h1>
		<h2><?php echo $contactSnippet ?></h2>
	</div>
	<div id="contactFormFP" style="color: white"><?php echo do_shortcode('[contact-form-7 id="670" title="Contact Us"]'); ?>
	</div>
</div>
<div class="contactBanner" id="contactBannerMobile" style="background-image: url('<?php echo $contactBannerMobile['url']; ?>');">
	<div class="snippet" id="contactSnippet">
		<h1><?php echo $contactSnippetTitle ?></h1>
		<h2><?php echo $contactSnippet ?></h2>
	</div>
	<div id="contactFormFP" style="color: white"><?php echo do_shortcode('[contact-form-7 id="670" title="Contact Us"]'); ?>
	</div>
</div>

         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>