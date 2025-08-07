<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title( ' &raquo; ', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no; maximum-scale=1" />	
	<script>
	document.addEventListener("DOMContentLoaded", function() {
		let current = document.querySelectorAll( '[aria-current]' );
		console.log( current );
		current.forEach( (el) => {
			console.log( el );
			el.removeAttribute( 'aria-current' );
		});
	});
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class='wrapper'>
		<header>
		<div id="header" class='header'>
				<div class="text-header">
					<div class='site-title'><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
					<div class='site-description'><?php bloginfo('description'); ?></div>
				</div>
		</div>
		<div class='primary-menu'>
			<span class='menu-toggle' title="<?php _e( 'Menu','universal' ); ?>"></span>
			<nav>
			<?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
			</nav>
		</div>
		</header>
		<div id="page" class='page-wrapper'>
			<div id="content" class="content clear">
				<main>
					<div class='post-wrapper'>
						<div class="search-form">
						<?php get_search_form(); ?>
						</div>
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title" title="Leave a Reply">Has title attribute (not matched)</h3>
							<form action="http://localhost:8000/wp-comments-post.php" method="post" id="commentform" class="comment-form">
								<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span class="required-field-message">Required fields are marked <span class="required">*</span></span></p>
								<p class="comment-form-comment"><label for="comment">Implicit label <span class="required">*</span> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">(required)</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required='true' required  /></label></p>
								<p class="comment-form-email"><label>Label in proximity without `for`</label> <input id="email" name="email" type="text" value="" size="30" aria-required='true' required  aria-labelledby="comment-email, comment-notes" /></p>
								<p class="comment-form-url"><label for="url"></label> has empty label <input id="url" name="url" type="url" value="" size="30" maxlength="200" autocomplete="url" /></p>
								<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='1260' id='comment_post_ID' />
								<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
								</p>
							</form>
						</div
