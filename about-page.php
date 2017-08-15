<?php /*

Template Name: about-page

*/?>

<?php get_header(); ?>

<?php 

	$pageBanner = get_field('pageBanner');
	$pageTitle = get_field('pageTitle');
	$introCTA = get_field('introCTA');
	$aboutIntro1 = get_field('aboutIntro1');
	$aboutIntro2 = get_field('aboutIntro2');
	$aboutIntro3 = get_field('aboutIntro3');
	$introCTALower = get_field('introCTALower');
	$scroller = get_field('scroller');
	$headliner = get_field('headliner');
	$aboutTextTitle = get_field('aboutTextTitle');
	$aboutTextContent = get_field('aboutTextContent');
	$aboutImage = get_field('aboutImage');
	$aboutImageBackground = get_field('aboutImageBackground');
	$signature = get_field('signature');
	$signatureName = get_field('signatureName');
	$signatureTitle = get_field('signatureTitle');
	$paper = get_field('paper');

?>


<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>

<div class="the-page">

	<div class="pageBanner" id="aboutBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>'); background-position: 50% 50%;">
	</div>
	<div class="container py-m">
		<div class="row">
			<div class="col-lg-7 pr-m py-2 mb-4">
				<h2><strong>Hello.</strong></h2>
				<p>Welcome to Bold Coast Creative -- a web development, design, and marketing collaborative based in Milbridge, Maine. My name is Alex McKay, the creator and lead web developer/designer. I am self-taught, and have been creating digital products for over five years, serving businesses and clients in many different capacities.</p>
				<p>A Washington, DC native, I relocated to Downeast Maine in order to be with family. My introduction to the community came by way of the lobster industry, where I worked for three years. Living the salt life afforded me the opportunity to become well acquainted with the local flavors.</p>
				<p>While I complete the lionshare of all work here in Maine, Bold Coast Creative is a collaborative effort. I work closely with highly skilled career developers and designers based in both Washington D.C. and Los Angeles. Together we will create a product you will love.</p>
			</div>
			<div class="col-lg-5" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/About Us/Alex.jpg'); background-position: 30%; border-radius: 5px; min-height: 300px; box-shadow: 0px 0px 10px rgba(0, 0, 0, .1)">
			</div>
		</div>
		<div class="row py-5 section-text">
			<div class="col-lg-4 py-2">
				<p><strong>Process</strong></p>
				<p>Bold Coast Creative uses a hands-on approach. First, I will meet with you to learn about your business. With an understanding of your goals and budget, I will propose a plan catered to your needs. We will then get to work building, providing you with working drafts along the way. You will have full access to the project as it evolves into a final working product.</p>
			</div>
			<div class="col-lg-4 py-2">
				<p><strong>Pricing</strong></p>
				<p>All services come at an hourly rate of $40. This means that the total cost of any project will vary based on a number of factors. We will absolutely work within your budget, and after an initial meeting, I will be happy to provide an estimate for your project. In cases where the scope is large, a down payment may be required. Recurring charges may also apply for domains and hosting.</p>
			</div>
			<div class="col-lg-4 py-2">
				<p><strong>Getting Started</strong></p>
				<p class="mb-4">I know that we can do a lot for your business. Begin by exploring our services in <a href="<?php echo get_site_url(); ?>/web-development">Web Development</a>, <a href="<?php echo get_site_url(); ?>/design-media">Design &amp; Media</a>, and <a href="<?php echo get_site_url(); ?>/digital-marketing">Digital Marketing</a>. Once your ready, click the button below.</p>

				<p>Once you're ready to get started, reach me by <a href="tel:2075368270">phone (207-536-8270)</a>, shoot me an <a href="mailto:info@boldcoastcreative.com">email (info@boldcoastcreative.com)</a>, or send me a direct message by visiting the <a href="<?php echo get_site_url(); ?>/contact-us">contact page</a>.</p>
			</div>
			<div class="col-12 py-2">

			</div>
		</div>
	</div>
	

</div>

         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>