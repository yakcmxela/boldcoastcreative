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

<body>
<div class="pageBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>')"></div>
<div class="intro">
	<h2><?php echo $introCTA ?></h2>
	<p><?php echo $capabilitiesIntro ?></p>
	<h3><?php echo $introCTALower ?></h3>
</div>
<div class="jumbotron" id="capJT" style="background-image: url('<?php echo $paper['url'] ?>')">
	<div class="col-8" id="capImage">
		<img src="<?php echo $scroller1['url']; ?>">
	</div>
</div>
<div class="container py-m">
	<h2 style="text-align: center;"><?php echo $firstBlockTitle ?></h2>
	<p><?php echo $firstBlockSnippet ?></p>
	<div class="row">
		<div class="col-md-4">
			<p><?php echo $firstBlockSectionOne ?></p>
		</div>
		<div class="col-md-4">
			<p><?php echo $firstBlockSectionTwo ?></p>
		</div>
		<div class="col-md-4" id="capList">
			<?php echo $firstBlockSectionThree ?>
		</div>
	</div>
</div>
<div class="jumbotron" id="capJT" style="background-image: url('<?php echo $paper['url'] ?>')">
	<div class="col-8" id="capImage">
		<img src="<?php echo $scroller2['url']; ?>">
	</div>
</div>
<div class="container py-m">
	<h2 style="text-align: center;"><?php echo $secondBlockTitle ?></h2>
	<p><?php echo $secondBlockSnippet ?></p>
	<div class="row">
		<div class="col-md-4">
				<p><?php echo $secondBlockSectionOne ?></p>
		</div>
		<div class="col-md-4">
			<p><?php echo $secondBlockSectionTwo ?></p>
		</div>
		<div class="col-md-4" id="capList">
			<?php echo $secondBlockSectionThree ?>
		</div>
	</div>
</div>
<div class="jumbotron" id="capJT" style="background-image: url('<?php echo $paper['url'] ?>')">
	<div class="col-8" id="capImage">
		<img src="<?php echo $scroller3['url']; ?>">
	</div>
</div>
<div class="container py-m">
	<h2 style="text-align: center;"><?php echo $thirdBlockTitle ?></h2>
	<p><?php echo $thirdBlockSnippet ?></p>
	<div class="row">
		<div class="col-md-4">
			<p><?php echo $thirdBlockSectionOne ?></p>
		</div>
		<div class="col-md-4">
			<p><?php echo $thirdBlockSectionTwo ?></p>
		</div>
		<div class="col-md-4" id="capList">
			<?php echo $thirdBlockSectionThree ?>
		</div>
	</div>
</div>
	<div class="jumbotron" id="capContactJT" style="background-image: url('<?php echo $paper['url'] ?>')">
		<div class="blockContents">
			<h2><?php echo $contactCTA ?></h2>
			<div class="buttonContainer" id="capButtonContainer">
				<a href="/contact-us/" title="Contact us page">
					<div class="CTA" id="capContactButton" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>')">
						<p><?php echo $contactButton ?></p>
					</div>
					<div class="CTA" id="capContactButtonActive" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>')">
						<p><?php echo $contactButton ?></p>
					</div>
				</a>
			</div>
		</div>
	</div>
</body>



         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>