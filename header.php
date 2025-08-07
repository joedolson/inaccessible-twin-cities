<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title( ' &raquo; ', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class='wrapper'>
		<header>	
		<?php apply_filters( 'universal_before_header', '' ); ?>
		<div id="header" class='header'>
				<?php apply_filters( 'universal_top_of_header', '' ); ?>
				<div class="text-header">
					<div class='site-title'><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
					<div class='site-description'><?php bloginfo('description'); ?></div>
				</div>
				<?php apply_filters( 'universal_end_of_header', '' ); ?>	
		</div>
		<?php apply_filters( 'universal_before_primary_menu', '' ); ?>
		<?php get_template_part( 'skiplinks' ); ?>
		<div class='primary-menu'>		
			<span class='menu-toggle' title="<?php _e( 'Menu','universal' ); ?>"></span>
			<nav>
			<?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
			</nav>
		</div>
		<?php apply_filters( 'universal_after_primary_menu', '' ); ?>
		</header>		
		<div id="page" class='page-wrapper'>
			<div id="content" class="content clear">
				<main>
					<div class='post-wrapper'>		
