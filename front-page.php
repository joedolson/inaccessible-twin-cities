<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
	<div <?php post_class(); ?>>
		<section>
		<?php if ( has_post_thumbnail() ) { ?>
			<?php
				// OMG DONT DO THIS 
				$featured_image = get_post_thumbnail_id();
				$img_src = wp_get_attachment_image_src( $featured_image, 'large' );
			?>
			<div class='featured-image'><img src="<?php echo $img_src[0]; ?>" /></div>
		<?php }
			$post_link = ''; 
			if ( get_the_title() == '' ) {
				$post_link = wpautop( sprintf( __( '<a href="%s" rel="bookmark">View untitled post</a>', 'universal' ), get_the_permalink() ) );
			} else {
		?>
		<?php 
			}
			if ( is_page() ) { ?>
			
				<h1 class="post-title" id="post-<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
				<div class='post-content' id="post-<?php the_ID(); ?>">
					<?php the_content( sprintf( __( 'Continue Reading' ), get_the_title() ) ); ?>
					<?php echo $post_link; ?>
					<?php edit_post_link('Edit this entry.', '<p class="edit">', '</p>'); ?>			
				</div> 
				
			<?php
			} else { ?>
			
				<h1 class="post-title" id="post-<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php
				get_template_part( 'post-meta' ); ?>

				<div class='post-content' id="post-<?php the_ID(); ?>">
					<?php the_excerpt(); ?>
					<?php echo $post_link; ?>
					<?php edit_post_link('Edit this entry.', '<p class="edit">', '</p>'); ?>			
				</div> 

				<!--
				<?php trackback_rdf(); ?>
				--><?php
				
			} ?>
		</section>
	</div>
    <?php endwhile; ?>

    <?php else : 
		
		get_template_part( 'no-posts' );
	
	endif; ?>

	<div class="prev_next">
    <?php posts_nav_link('&nbsp; &nbsp;', __( '&larr; Previous Posts','universal' ), __( 'Next Posts &rarr;','universal' ) ); ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
