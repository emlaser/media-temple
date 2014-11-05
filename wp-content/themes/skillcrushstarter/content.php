<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	</header>
	<?php the_content() ?>
	<footer>
		<p><?php echo get_comments_number() ?> comments <?php if (is_user_logged_in() && current_user_can('edit_posts')): echo '| <a href="' . get_edit_post_link() . '">Edit Post</a>'; endif; ?></p>
	</footer>
</article>