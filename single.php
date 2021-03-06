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
		<?php } ?>
		<h1 class="post-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
		<?php get_template_part( 'post-meta' ); ?>
		<div class='post-content' id="post-<?php the_ID(); ?>">
			<?php the_content( sprintf( __( 'Finish reading <em>%s</em>', 'accessible-twin-cities' ), get_the_title() ) ); ?>
			<?php edit_post_link('Edit this entry.', '<p class="edit">', '</p>'); ?>
		</div> 

		<div class="comments">
			<?php 
				$args = array( 
							'before'=>'<p class="paginated">',
							'next_or_number' => 'next',
							'nextpagelink' => 'Next Page<span class="dashicon nextpage"></span>',
							'previouspagelink' => '<span class="dashicon prevpage"></span>Previous Page'
						);
				wp_link_pages( $args ); 
			?>
			<?php comments_popup_link( __( 'Comments (0)', 'accessible-twin-cities' ), __( 'Comments (1)', 'accessible-twin-cities' ), __( 'Comments (%)', 'accessible-twin-cities' ) ); ?>

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
    <?php posts_nav_link('&nbsp; &nbsp;', __( '&larr; Previous Posts','accessible-twin-cities' ), __( 'Next Posts &rarr;','accessible-twin-cities' ) ); ?>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>