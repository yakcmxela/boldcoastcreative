<?php /*

Template Name: info-page

*/?>

<link href="/style.css" type="text/css" rel="stylesheet" />

<body>

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
         ?>

         <div class="infoBlock">
         	<p><?php echo $infoPage ?></p>
         </div>

</body>

         
<?php
   endwhile;
endif;
 
?>
