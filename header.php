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
<body>
	<header>
		<div class="container clearfix">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-left','container' => 'nav') ); ?>
			<div class="logo"><a href="<?php echo site_url()?>"><img src="<?php echo IMAGES?>/logo.png"></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary-right','container' => 'nav') ); ?>
		</div>
	</header>