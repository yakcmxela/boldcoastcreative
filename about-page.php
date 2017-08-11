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

<body>

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>

	<div class="pageBanner" id="aboutBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>'); background-position: 50% 50%;">
	</div>
	<div class="container py-m">
		<h2 style="text-align: center;"><?php echo $introCTA ?></h2>
		<div class="row">
			<div class="col-md-4">
				<p><?php echo $aboutIntro1 ?></p>
			</div>
			<div class="col-md-4">
				<p><?php echo $aboutIntro2 ?></p>
			</div>
			<div class="col-md-4">
				<p><?php echo $aboutIntro3 ?></p>
			</div>
			<h2><?php echo $introCTALower ?></h2>
		</div>
	</div>
	<div class="aboutContents" style="background-image: url('<?php echo $aboutImageBackground['url'] ?>')">
		<div class="letter" style="background-image: url('<?php echo $paper['url'] ?>')">
			<h2><?php echo $aboutTextTitle ?></h2>
			<p><?php echo $aboutTextContent ?></p>
			<div class="leftHalfLetter">
				<img class="signatureImage" src="<?php echo $signature['url'] ?>">
				<p class="signature" style="padding-top: 10px; margin-bottom: 0px"><?php echo $signatureName ?></p>
				<p><?php echo $signatureTitle ?></p>
			</div>
			<div class="rightHalfLetter">
				<a href="/" title="Back to Home Page."><img class="aboutImage" src="<?php echo $aboutImage['url'] ?>"></a>
			</div>
		</div>
	</div>

</body>

         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>