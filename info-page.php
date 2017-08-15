<?php /*

Template Name: info-page

*/?>

<?php get_header(); ?>

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>

         <?php 

         $infoPage = get_field('infoPage');
         $infoBackground = get_field('infoBackground')

         ?>

<body>

<div class="infoPage" style="background-image: url('<?php echo $infoBackground['url'] ?>')">
	<div class="mw-9 m-auto p-5">
   		 <p><?php echo $infoPage ?></p>
	</div>
</div>



</body>

<?php get_footer(); ?>

         
<?php
   endwhile;
endif;
 
?>
