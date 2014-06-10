<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<title><?php wp_title( ' &raquo; ', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class='wrapper'>
		<header>	
		<?php apply_filters( 'atc_before_header', '' ); ?>
		<div id="header" class='header'>
				<?php apply_filters( 'atc_top_of_header', '' ); ?>								
				<div class='site-title'><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
				<div class='site-description'><?php bloginfo('description'); ?></div>
				<?php apply_filters( 'atc_end_of_header', '' ); ?>	
		</div>
		<?php apply_filters( 'atc_before_primary_menu', '' ); ?>
		<?php get_template_part( 'skiplinks' ); ?>
		<div class='primary-menu'>		
			<span class='menu-toggle' title="<?php _e( 'Menu','accessible-twin-cities' ); ?>"></span>
			<nav>
			<?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
			</nav>
		</div>
		<?php apply_filters( 'atc_after_primary_menu', '' ); ?>
		</header>		
		<div id="page" class='page-wrapper'>
			<div id="content" class="content clear">
				<main>
					<div class='post-wrapper'>		
