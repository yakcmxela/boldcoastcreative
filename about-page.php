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
	<div class="page-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/About Us/paper-background.jpg');">
		<div class="container-fluid mw-12 py-m">
			<div class="row my-3">
				<div class="col-lg-7 px-1">
					<div class="section-text block-shadow p-3 bg-w">
						<h2><strong>Hello.</strong></h2>
						<p>Welcome to Bold Coast Creative -- a web development, design, and marketing collaborative based in Milbridge, Maine. My name is Alex McKay, the creator and lead web developer/designer. I am self-taught, and have been creating digital products for over five years, serving businesses and clients in many different capacities.</p>
						<p>A Washington, DC native, I relocated to Downeast Maine in order to be with family. My introduction to the community came by way of the lobster industry, where I worked for three years. Living the salt life afforded me the opportunity to become well acquainted with the local flavors.</p>
						<p>While I complete the lionshare of all work here in Maine, Bold Coast Creative is a collaborative effort. I work closely with highly skilled career developers and professional designers based in both Washington D.C. and Los Angeles.</p>
					</div>
				</div>
				<div class="col-lg-5 block-shadow" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/About Us/Alex.jpg'); background-position: 30%; min-height: 300px;">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 p-1">
					<div class="section-text block-shadow p-3 bg-w">
						<p><strong>Process</strong></p>
						<p>Bold Coast Creative uses a hands-on approach. First, I will meet with you to learn about your business. With an understanding of your goals, expectations, timeline, and budget, I will propose a platform and organize a strategy customized to your needs. We will then get to work building, communicating and providing you with working drafts along the way. You will have full access to the project as it evolves into a final working product.</p>
					</div>
				</div>
				<div class="col-lg-4 p-1" id="pricing">
					<div class="section-text block-shadow p-3 bg-w">
						<p><strong>Pricing</strong></p>
						<p>All services come at an hourly rate of $50. This means that the total cost of any project we undertake will vary based on a number of factors. We will absolutely work within your budget, and after an initial meeting, I will be happy to provide an estimated final price. In cases where the project's scope is large, a down payment may be required. Recurring charges may also apply for domains, certain platforms (Shopify for example), and hosting.</p>
					</div>
				</div>
				<div class="col-lg-4 p-1">
					<div class="section-text block-shadow p-3 bg-w">
						<p><strong>Getting Started</strong></p>
						<p class="mb-4">I know that we can do a lot for your business. Begin by exploring our services in <a href="<?php echo get_site_url(); ?>/web-development">Web Development</a>, <a href="<?php echo get_site_url(); ?>/design-media">Design &amp; Media</a>, and <a href="<?php echo get_site_url(); ?>/digital-marketing">Digital Marketing</a>. Once your ready, click the button below.</p>

						<p>Once you're ready to get started, reach me by <a href="tel:2075368270">phone (207-536-8270)</a>, shoot me an <a href="mailto:info@boldcoastcreative.com">email (info@boldcoastcreative.com)</a>, or send me a direct message by visiting the <a href="<?php echo get_site_url(); ?>/contact-us">contact page</a>.</p>
					</div>
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