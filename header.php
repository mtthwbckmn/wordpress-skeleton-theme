<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', 'true', 'right' ); bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/code/layout.css">
	<?php wp_head(); ?>
</head>
<body id="<?php global $post; $slug=$post->post_name; echo $slug; ?>" class="<?php global $post; $type=$post->post_type; echo $type; ?>">
	<header>
		<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => 'nav', 'container_class' => 'main', 'menu_id' => 'nav-header' ) ); ?>
	</header>
	<div class="container">