  <?php wp_footer(); ?>

<?php 

	$footerInfo = get_field('footerInfo');

?>

<html>
 <footer>
 	<div class="footer">
	 	<div class="footerInfo mw-6">
	 		<ul>
	 		<li><strong>Downeast Maine digital products and web consulting.</strong></li>
	 		<li>Specializing in website development, SEO, graphic design, multimedia production, content creation, social media, and digital marketing.</li>
	 		<li><a href="mailto:info@boldcoastcreative.com">info@boldcoastcreative.com</a></li>
	 		<li><a href="tel:2075368270" title="Call us">(207) 536-8270</a></li>
			<li>Foster creativity. Be bold.</li>
			<li><a href="<?php echo get_site_url(); ?>/terms-conditions/" title="Terms and Conditions Page">Terms &amp; Conditions</a></li>
			<li"><a href="<?php echo get_site_url(); ?>/privacy-policy/" title="Privacy Policy Page">Privacy Policy</a></li>
	 	</div>
	</div>
 </footer>
</body>
</html>