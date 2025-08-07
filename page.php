<?php get_header(); ?>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	
		<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

		<div <?php post_class( 'post-content' ); ?> id="post-<?php the_ID(); ?>">
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
			</div>
			<h2>Images</h2>
			<p>
			Has title attribute, no alt<br />
			<img src="https://picsum.photos/200/300" title="title attribute">
			</p>
			<p>
			Has title attribute and same alt<br />
			<img src="https://picsum.photos/200/300" title="title attribute" alt="title attribute">
			</p>
			<p>
			Has title attribute and different alt<br />
			<img src="https://picsum.photos/200/300" title="title attribute" alt="alt attribute">
			</p>
			<h2>Links & Buttons</h2>
			<p>
			with text and title:
			<button title="This button">This button</button> <button title="this button" aria-label="this button"></button> <button title="this button"><img src="https://picsum.photos/200/300" alt="this button" /></button><br />
			<a href="#" title="This link">This link</a> <a href="#"  title="this link" aria-label="this link"></a> <a href="#" title="this link"><img src="https://picsum.photos/200/300" alt="this link" /></a>
			</p>
			<h2>Input fields with titles</h2>
			<p>
			With aria-label<br />
			<input type="search" title="search" aria-label="search">
			</p>
			<p>
			With aria-labelledby, target exists<span id="searchtargetexists">labelled</span><br />
			<input type="search" title="search" aria-labelledby="searchtargetexists">
			</p>
			<p>
			With aria-labelledby, target not exists<span id="doesexist">labelled</span><br />
			<input type="search" title="search" aria-labelledby="doesntexist">
			</p>
			<p>
			<label for="searchfield">Has label</label>
			<input id="searchfield" type="search" title="search">
			</p>
			<p>
			<label for="searchfield">Has implicit label
			<input id="searchfield" type="search" title="search"></label>
			</p>
			<h2>LInk with target attribute</h2>
			<p>
			<a href="#" target="_blank">Generic</a>
			</p>
			<p>
			<a href="https://facebook.com" target="_blank">Links to facebook</a>
			</p>
			<h2>Tabindexes</h2>
			<p>
			Focusable elements with tabindex:
			<input type="text" tabindex="1"> <a href="#" tabindex="1">Link</a> <button tabindex="1">Button</button>
			</p>
			<p>
			<select tabindex="1"><option>Option</option></select> <textarea tabindex="1"></textarea>
			</p>
			<h2>Fake buttons</h2>
			<div role="button">This is a button</div>
			<p><span role="button">Also a button</div></p>
			<p><button role="button">Actually a button, unnecessary role. Should not get tabindex</button></p>
			<h2>Fake links</h2>
			<div role="link">This is a link</div>
			<p><span role="link">Also a link</span></p>
			<p><a role="link">Actually a link, but not href</a></p>
			<p><a role="link" href="#">Actually a link, has href</a></p>
			<?php the_content( sprintf( __( 'Finish reading <em>%s</em>', 'universal' ), get_the_title() ) ); ?>
		</div> 
		<p class="edit"><?php edit_post_link('Edit this entry.', '', ''); ?></p>
    <?php endwhile; ?>


	<?php else :
	
		get_template_part( 'no-posts' );	
	
	endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>