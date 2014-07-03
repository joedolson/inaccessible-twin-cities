<?php get_header(); ?>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	<div <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) { ?>
			<?php
				// OMG DONT DO THIS 
				$featured_image = get_post_thumbnail_id();
				$img_src = wp_get_attachment_image_src( $featured_image, 'large' );
			?>
			<div class='featured-image'><img src="<?php echo $img_src[0]; ?>" /></div>
		<?php }
			/* Handles posts without titles */
			$post_link = ''; 
			if ( get_the_title() == '' ) {
				$post_link = wpautop( sprintf( __( '<a href="%s" rel="bookmark">View untitled post</a>', 'universal' ), get_the_permalink() ) );
			} else {
		?>
		<h1 class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php 
			}	
			get_template_part( 'post-meta' ); ?>
		<div class='post-content' id="post-<?php the_ID(); ?>">
			<?php the_content( sprintf( __( 'Finish reading <em>%s</em>', 'universal' ), get_the_title() ) ); ?>
			<?php echo $post_link; ?>
			<?php edit_post_link('Edit this entry.', '<p class="edit">', '</p>'); ?>
		</div> 

		<div class="comments">
			<?php wp_link_pages(); ?>
			<?php comments_popup_link( __( 'Comments (0)', 'universal' ), __( 'Comments (1)', 'universal' ), __( 'Comments (%)', 'universal' ) ); ?>
		</div>

		<!--
		<?php trackback_rdf(); ?>
		-->
	</div>
    <?php endwhile; ?>

	<?php comments_template(); ?>

    <?php else : 
	
			get_template_part( 'no-posts' );
	
	endif; ?>

    <div class="prev_next">
    <?php posts_nav_link('&nbsp; &nbsp;', __( '&larr; Previous Posts','universal' ), __( 'Next Posts &rarr;','universal' ) ); ?>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>