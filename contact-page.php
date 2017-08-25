<?php /*

Template Name: contact-page

*/?>

<?php get_header(); ?>

<?php

	$logo = get_field('logo');
	$pageBanner = get_field('pageBanner');
    $introCTA = get_field('introCTA');
    $introCTALower = get_field('introCTALower');
    $contactForm = get_field('contactForm');
    $contactFormBG = get_field('contactFormBG');
    $formCTA = get_field('formCTA');
    $contactButtonText = get_field('contactButtonText');
    $contactInfoTitle = get_field('contactInfoTitle');

?>


<?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>
    <div class="the-page">
    
		<div class="contactPageBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>')">
			<div class="container" id="contactContainer">
				<div class="contactForm" style="background-image: url('<?php echo $contactFormBG['url']; ?>')"">
					<div class="contactHead">
						<h1>Ready? Let's get started.</h1>
						<div class="contactInfo">
							<p><a href="mailto:info@boldcoastcreative.com" title="Email us"><i class="fa fa-envelope"></i> | info@boldcoastcreative.com</a></p>
							<p><a href="tel:2075368270" title="Call us"><i class="fa fa-phone"></i> | (207) 536-8270</a></p>
						</div>
					</div>
					<div class="col-8">
						<p><?php echo $formCTA ?></p>
					</div>
					<div id="contactForm">
						<?php echo do_shortcode('[contact-form-7 id="670" title="Contact Us"]'); ?>
					</div>
				</div>
			</div>
		</div>

	</div>

         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>