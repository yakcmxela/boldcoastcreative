<?php /*

Template Name: webdev

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

         $capabilitiesBanner = get_field('capabilitiesBanner');
         $pageTitle = get_field('pageTitle');
         $capabiltiiesIntro = get_field('capabiltiiesIntro');
         $introCTA = get_field('introCTA');
         $introCTALower = get_field('introCTALower');
         $scroller = get_field('scroller');
         $headliner = get_field('headliner');
         $capabilitiesImage = get_field('capabilitiesImage');
         $firstBlockTitle = get_field('firstBlockTitle');
         $firstBlock = get_field('firstBlock');
         $secondBlockTitle = get_field('secondBlockTitle');
         $secondBlock = get_field('secondBlock');
         $thirdBlockTitle = get_field('thirdBlockTitle');
         $thirdBlock = get_field('thirdBlock');
         $buttonCTA = get_field('buttonCTA');
         $webDevSEO = get_field('webDevSEO');

         ?>
         
<body style="width: 100%">
<div class="capabilitiesBanner" style="background-image: url('<?php echo $capabilitiesBanner['url'] ?>')">
	<div class="bannerText" style="width: 60%;">
		<h1><?php echo $pageTitle ?></h1>
	</div>
</div>
	<div class="intro">
		<h2><?php echo $introCTA ?></h2>
		<p><?php echo $capabilitiesIntro ?></p>
		<h3><?php echo $introCTALower ?></h3>
	</div>
	<div class="scroller" style="background-image: url('<?php echo $scroller['url'] ?>')">
		<div class="scrollerText">
			<h1><?php echo $headliner ?></h1>
		</div>
	</div>
	<div class="capabilitiesContent" style="background-image: url('<?php echo $capabilitiesImage['url'] ?>')">
		<ul class="popUpList" style="border-radius: 20px 0px 20px 50px;">
			<li class="liTitle"><?php echo $firstBlockTitle ?></li>
			<li class="liDescription"><?php echo $firstBlock ?></li>
		</ul>
		<ul class="popUpList" style="background-color: rgba(255, 111, 6, .9); border-radius: 20px 20px 20px 20px;">
			<li class="liTitle"><?php echo $secondBlockTitle ?></li>
			<li class="liDescription"><?php echo $secondBlock ?></li>
		</ul>
		<ul class="popUpList" style="background-color: rgba(101, 150, 96, .9); border-radius: 0px 20px 50px 20px;">
			<li class="liTitle"><?php echo $thirdBlockTitle ?></li>
			<li class="liDescription"><?php echo $thirdBlock ?></li>
		</ul>
	<h1><?php echo $buttonCTA ?></h1>
	<button class="circleButton">Let's talk</button>
	</div>
</div>
</body>



         
<?php
   endwhile;
endif;
 
?>

<?php get_footer(); ?>