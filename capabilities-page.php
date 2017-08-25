<?php /*

Template Name: capabilities-page

*/?>

<?php get_header(); ?>

<?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>

         <?php

         $pageBanner = get_field('pageBanner');
         $pageTitle = get_field('pageTitle');
         $capabilitiesIntro = get_field('capabilitiesIntro');
         $introCTA = get_field('introCTA');
         $introCTALower = get_field('introCTALower');
         $scroller = get_field('scroller');
         $firstBlockTitle = get_field('firstBlockTitle');
         $firstBlockSnippet = get_field('firstBlockSnippet');
         $firstBlockSectionOne = get_field('firstBlockSectionOne');
         $firstBlockSectionTwo = get_field('firstBlockSectionTwo');
         $firstBlockSectionThree = get_field('firstBlockSectionThree');
         $secondBlockTitle = get_field('secondBlockTitle');
         $secondBlockSnippet = get_field('secondBlockSnippet');
         $secondBlockSectionOne = get_field('secondBlockSectionOne');
         $secondBlockSectionTwo = get_field('secondBlockSectionTwo');
         $secondBlockSectionThree = get_field('secondBlockSectionThree');
         $thirdBlockTitle = get_field('thirdBlockTitle');
         $thirdBlockSnippet = get_field('thirdBlockSnippet');
         $thirdBlockSectionOne = get_field('thirdBlockSectionOne');
         $thirdBlockSectionTwo = get_field('thirdBlockSectionTwo');
         $thirdBlockSectionThree = get_field('thirdBlockSectionThree');
         $lightBlueTexture = get_field('lightBlueTexture');
	 	 $lightGoldTexture = get_field('lightGoldTexture');
		 $darkGoldTexture = get_field('darkGoldTexture');
		 $darkBlueTexture = get_field('darkBlueTexture');
		 $scroller1 = get_field('scroller1');
		 $scroller2 = get_field('scroller2');
		 $scroller3 = get_field('scroller3');
		 $paper = get_field('paper');
		 $contactCTA = get_field('contactCTA');
		 $contactButton = get_field('contactButton');

         ?>

<div class="the-page">
	<div class="pageBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>')"></div>
	<div class="py-5 px-4 mw-9 m-auto center">
		<h2 class="center py-2"><?php echo $introCTA ?></h2>
		<p><?php echo $capabilitiesIntro ?></p>
		<h2 class="center py-2 mb-0"><?php echo $introCTALower ?></h2>
	</div>
	<div class="pt-5 bg-cover" style="background-image: url('<?php echo $paper['url'] ?>')">
		<div class="m-auto center" id="capImage">
			<img class="mw-100" src="<?php echo $scroller1['url']; ?>">
		</div>
	</div>
	<div class="container py-5">
		<h2 class="center"><?php echo $firstBlockTitle ?></h2>
		<p><?php echo $firstBlockSnippet ?></p>
		<div class="row">
			<div class="col-md-4 py-2">
				<p><?php echo $firstBlockSectionOne ?></p>
			</div>
			<div class="col-md-4 py-2">
				<p><?php echo $firstBlockSectionTwo ?></p>
			</div>
			<div class="col-md-4 py-2 d-flex justify-content-center">
				<?php echo $firstBlockSectionThree ?>
			</div>
		</div>
	</div>
	<div class="pt-5 bg-cover" style="background-image: url('<?php echo $paper['url'] ?>')">
		<div class="m-auto center">
			<img class="mw-100" src="<?php echo $scroller2['url']; ?>">
		</div>
	</div>
	<div class="container py-5">
		<h2 class="center"><?php echo $secondBlockTitle ?></h2>
		<p><?php echo $secondBlockSnippet ?></p>
		<div class="row">
			<div class="col-md-4 py-2">
					<p><?php echo $secondBlockSectionOne ?></p>
			</div>
			<div class="col-md-4 py-2">
				<p><?php echo $secondBlockSectionTwo ?></p>
			</div>
			<div class="col-md-4 py-2 d-flex justify-content-center">
				<?php echo $secondBlockSectionThree ?>
			</div>
		</div>
	</div>
	<div class="pt-5 bg-cover" style="background-image: url('<?php echo $paper['url'] ?>')">
		<div class="m-auto center">
			<img class="mw-100" src="<?php echo $scroller3['url']; ?>">
		</div>
	</div>
	<div class="container py-5">
		<h2 style="text-align: center;"><?php echo $thirdBlockTitle ?></h2>
		<p><?php echo $thirdBlockSnippet ?></p>
		<div class="row">
			<div class="col-md-4 py-2">
				<p><?php echo $thirdBlockSectionOne ?></p>
			</div>
			<div class="col-md-4 py-2">
				<p><?php echo $thirdBlockSectionTwo ?></p>
			</div>
			<div class="col-md-4 d-flex justify-content-center py-2">
				<?php echo $thirdBlockSectionThree ?>
			</div>
		</div>
	</div>
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