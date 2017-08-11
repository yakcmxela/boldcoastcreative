<?php /*

Template Name: capabilities-page

*/?>

<link href="/style.css" type="text/css" rel="stylesheet" />
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
         $headliner = get_field('headliner');
         $firstBlockTitle = get_field('firstBlockTitle');
         $firstBlock = get_field('firstBlock');
         $secondBlockTitle = get_field('secondBlockTitle');
         $secondBlock = get_field('secondBlock');
         $thirdBlockTitle = get_field('thirdBlockTitle');
         $thirdBlock = get_field('thirdBlock');
         $buttonCTA1 = get_field('buttonCTA1');
         $buttonCTA2 = get_field('buttonCTA2');
         $buttonCTA3 = get_field('buttonCTA3');
         $button1 = get_field('button1');
         $button2 = get_field('button2');
         $button3 = get_field('button3');
         $lightBlueTexture = get_field('lightBlueTexture');
	 	 $lightGoldTexture = get_field('lightGoldTexture');
		 $darkGoldTexture = get_field('darkGoldTexture');
		 $darkBlueTexture = get_field('darkBlueTexture');

         ?>

<body>
<div class="pageBanner" style="background-image: url('<?php echo $pageBanner['url'] ?>')">
	<div class="bannerText">
		<h1><?php echo $pageTitle ?></h1>
	</div>
</div>
	<div class="intro">
		<h2><?php echo $introCTA ?></h2>
		<p><?php echo $capabilitiesIntro ?></p>
		<h3><?php echo $introCTALower ?></h3>
	</div>
	<div class="capButtonContainer">
		<div class="col-md-4">
			<div class="capButton" id="capButton1Mobile" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>')">
				<h2><?php echo $firstBlockTitle ?></h2>
			</div>
			<div class="capInfo" id="capInfo1">
				<h3><?php echo $firstBlock ?></h3>
				<h2><?php echo $buttonCTA1 ?></h2>
				<div class="buttonContainer">
					<a href="http://www.boldcoastcreative.com/contact-us/" title="Link to contact page">
						<div class="CTA" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>')">
							<p><?php echo $button1 ?></p>
						</div>
					</a>
				</div>
			</div>
			<div class="capButton" id="capButton1" style="background-image: url('<?php echo $darkBlueTexture['url']; ?>')">
					<h2><?php echo $firstBlockTitle ?></h2>
			</div>
		</div>
		<div class="col-md-4">
			<div class="capButton" id="capButton2Mobile" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>')">
				<h2><?php echo $secondBlockTitle ?></h2>
			</div>
			<div class="capInfo" id="capInfo2">
				<h3><?php echo $secondBlock ?></h3>
				<h2><?php echo $buttonCTA2 ?></h2>
				<div class="buttonContainer">
					<a href="http://www.boldcoastcreative.com/contact-us/" title="Link to contact page">
						<div class="CTA" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>')">
							<p><?php echo $button2 ?></p>
						</div>
					</a>
				</div>
			</div>
			<div class="capButton" id="capButton2" style="background-image: url('<?php echo $lightBlueTexture['url']; ?>')">
				<h2><?php echo $secondBlockTitle ?></h2>
			</div>
		</div>
		<div class="col-md-4">
			<div class="capButton" id="capButton3Mobile" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>')">
				<h2><?php echo $thirdBlockTitle ?></h2>
			</div>
			<div class="capInfo"  id="capInfo3">
				<h3><?php echo $thirdBlock ?></h3>
				<h2><?php echo $buttonCTA3 ?></h2>
				<div class="buttonContainer">
					<a href="http://www.boldcoastcreative.com/contact-us/" title="Link to contact page">
						<div class="CTA" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>')">
							<p><?php echo $button3 ?></p>
						</div>
					</a>
				</div>
			</div>
			<div class="capButton" id="capButton3" style="background-image: url('<?php echo $darkGoldTexture['url']; ?>')">
				<h2><?php echo $thirdBlockTitle ?></h2>
			</div>
		</div>		
</div>
</body>



         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>