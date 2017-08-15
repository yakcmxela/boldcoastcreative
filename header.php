<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
<meta name="keywords" content="Web development,website design,web applications, e-commerce,photography,video,post-production,branding,logos,digital marketing,social media marketing,seo,search engine optimization,metrics,analytics,advertising,downeast,maine">
<meta name="description" content="We will help your local business flourish online. We specialize in professional web page design, company branding, social media management, and seo services.">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Dosis|Quicksand|Ubuntu" rel="stylesheet">
<link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<?php
	
	$logo = get_field('logo', 'option');

?>

<body <?php body_class(); ?>>
  <header>
  	<div class="d-flex justify-content-center flex-column p-3" id="navDesktop">
	  	<div class="bold-nav py-2">
	  		<div class="nav-title">
				<a href="/" title="Home Page"><p>Bold Coast Creative</p></a>
			</div>
			<div class="nav-links">
				<ul>
					<a href="<?php echo get_site_url(); ?>/" title="Home Page"><li>Home</li></a><!-- 
					 --><a href="<?php echo get_site_url(); ?>/web-development"><li>Development</li></a><!-- 
					 --><a href="<?php echo get_site_url(); ?>/design-media"><li>Design</li></a><!-- 					 
					 --><a href="<?php echo get_site_url(); ?>/digital-marketing"><li>Marketing</li></a><!-- 
					 --><a href="<?php echo get_site_url(); ?>/about-us"><li>About</li></a><!-- 
					 --><a href="<?php echo get_site_url(); ?>/contact-us"><li>Contact</li></a>
				</ul>
			</div><!--
			--><div class="nav-links contact-links">
				<ul>
					<a href="tel:2075368270"><li><i class="fa fa-phone"></i></li></a><!--
					--><a href="mailto:info@boldcoastcreative.com"><li><i class="fa fa-envelope"></i></li></a>
				</ul>
			</div>
		</div>
	</div>

 <!-- Mobile Navigation -->

<div class="d-flex justify-content-center flex-row mobile-nav">
		<div class="d-flex justify-content-center flex-row mobile-navbar">
			<div class="d-flex align-items-center mobileMenu">
				<i class="fa fa-bars fa-2x p-3 m-2 navBars"></i>
			</div>
			<div class="d-flex align-items-center ml-auto mobile-nav-logo">	
				<a class="p-3 m-2" href="/" title="Home Page"><img src="<?php echo $logo['url']?>"></a>
			</div>
		</div>
		<div class="mobileMenuMainContainer d-flex align-items-center justify-content-center flex-column center">
			<div class="mobile-title d-flex align-items-center justify-content-center ">
				<p>BOLD COAST CREATIVE</p>
			</div>
			<div class="mobile-menu d-flex align-items-center justify-content-start left">
				<ul class="mobileMenuMain ml-5">
					<li><a href="<?php echo get_site_url(); ?>/">Home</a></li>
					<li><a href="<?php echo get_site_url(); ?>/web-development/">Web Development</a></li>
					<li><a href="<?php echo get_site_url(); ?>/design-media/">Design &amp; Media</a></li>
					<li><a href="<?php echo get_site_url(); ?>/digital-marketing/">Digital Marketing</a></li>
					<li><a href="<?php echo get_site_url(); ?>/about-us/">About</a></li>
					<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact</a></li>
				</ul>
			</div>
			<form class="d-flex align-items-end flex-column mobile-msg">
				<div class="chat-box right px-2">
				<p>Please enter your message and someone will be with you as soon as possible.</p>
				</div>
				<input type="text" name="user-message">
			</form>
			<div class="mobile-buttons d-flex align-items-center py-4">
				<a class="mobile-button mobileCall" href="tel:2075368270">
					<i class="fa fa-phone fa-3x"></i>
				</a>
				<a class="mobile-button mobileEmail" href="mailto:info@boldcoastcreative.com">
					<i class="fa fa-envelope fa-3x"></i>
				</a>
<!-- 				<div class="mobile-button mobileChat">
					<i class="fa fa-comment fa-2x"></i>
				</div> -->
			</div>
		</div>
	</div>
</div>

  </header>