<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

		</div><!-- #main -->
		<!-- <div class="clearfix"></div> -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<p><a href="<?php echo get_bloginfo('url') ?>">&copy; <?php echo date('Y') ?> Skillcrush / Your Name Here!</a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>