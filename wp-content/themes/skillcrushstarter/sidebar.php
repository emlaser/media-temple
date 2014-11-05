<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>
<div id="secondary">
	<?php if (is_active_sidebar('sidebar-1')): ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar('sidebar-1'); ?>
			<?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
