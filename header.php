<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?> > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  	<title><?php wp_title( '|', true, 'right' ); ?></title>
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  	<link rel="shortcut icon" href=""  type="image/x-icon"/>
  	<?php wp_head();?>
</head>
<body class="cbp-spmenu-push">
	<header>
		<div class="container clearfix">
			<button id="showLeftPush">Show/Hide Left Push Menu</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary-left','container' => 'nav') ); ?>
			<div class="logo"><a href="<?php echo site_url()?>"><img src="<?php echo IMAGES?>/logo.png"></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary-right','container' => 'nav') ); ?>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
				<h3>Menu</h3>
				<a href="<?php echo site_url()?>">Home</a>
				<a href="<?php echo site_url('our-menu')?>">Our Menu</a>
				<a href="<?php echo site_url('order-menu')?>">Order Menu</a>
				<a href="<?php echo site_url('word-around-town')?>">Word around town</a>
				<a href="<?php echo site_url('gallery')?>">Gallery</a>
			</nav>
		</div>
	</header>