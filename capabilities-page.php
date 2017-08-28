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

<div class="the-page" data-title="<?php wp_title(); ?>">
	<div class="pageBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>')">
		<div class="pageBanner-textContainer desktop-text-header flex-column d-flex align-items-end justify-content-end right">
			<div class="intro-line-container my-1">
				<span class="m-0 intro-line"><?php echo $introCTA ?></span>
			</div>
			<div class="intro-line-container my-1">
				<span class="m-0 intro-line"><?php echo $introCTALower ?></span>
			</div>
		</div>
	</div>
	<div class="mobile-text-header center">
		<h2 class="m-0 intro-line"><?php echo $introCTA ?><br/><?php echo $introCTALower ?></h2>
	</div>
	<div class="pt-5">
	<?php
	if( have_rows('capSection') ):
		while ( have_rows('capSection') ) : the_row(); ?>
			<div class="cap-img-bg block-shadow bg-cover mw-12 m-auto" style="background-image: url('<?php echo $paper['url'] ?>')">
				<div class="m-auto center">
					<img class="mw-100" src="<?php the_sub_field('capImage'); ?>">
				</div>
				<div class="style-text d-flex justify-content-end align-items-end">
					<span class="lp-img-header block-shadow-up"><?php the_sub_field('capHeader') ?></span>
				</div>
			</div>
			<h2 class="center lp-img-header-mobile mb-0"><?php the_sub_field('capHeader') ?></h2>
			<div class="container py-3">
				<div class="row">
					<div class="col-md-4 py-2">
						<p><?php the_sub_field('capText1') ?></p>
					</div>
					<div class="col-md-4 py-2">
						<p><?php the_sub_field('capText2') ?></p>
					</div>
					<div class="col-md-4 py-2">
						<?php the_sub_field('capText3') ?>
					</div>
				</div>
			</div>
		<?php endwhile;
	endif;
	?>
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