<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Mentor.Makerspace.com
 * @since Mentor.Makerspace.com 1.0
 */

 //get info for the currently logged in user.
 global $current_user;
 get_currentuserinfo();
?>
		<div id="sidebar" class="widget-area group" role="complementary">
			<?php if(!dynamic_sidebar('sidebar')) : ?>
			<?php endif; // end sidebar widget area ?>
			<?php do_action( 'before_sidebar' ); ?>
		</div><!-- #secondary .widget-area -->
