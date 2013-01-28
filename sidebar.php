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
			<?php if(!dynamic_sidebar('sidebar-1')) : ?>
				<aside id="member-meta" class="group">
					<h5><?php printf(__('Welcome back %1$s!', 'mentor_makerspace'), $current_user->user_firstname); ?></h5>
					<p>you last logged in 00/00/00</p>
					<?php if('') : //currently no function exists for user photos. TO DO: BUILD ONE OR SOMETHING COOL LIKE THAT. ?>
						<div id="user-photo" class="alignleft">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dale-dougherty.jpg" width="71" height="71" />
						</div><!--[END #user-photo]-->
					<?php endif; ?>
					<div id="user-data" class="alignleft">
						<ul>
							<li><span>0</span> <a href="#">Projects</a></li>
							<li><span>0</span> <a href="#">Discussions</a></li>
							<li><span>0</span> <a href="#">Guides</a></li>
						</ul>
					</div><!--[END #user-data]-->
				</aside><!--[END #author-meta]-->
				<?php /*<aside id="projects" class="widget">
					<h3>Projects</h3>
					<ul>
						<li><a href="#">Marshmallow Shooters</a></li>
						<li><a href="#">SpinBots</a></li>
						<li><a href="#">BrushBots</a></li>
						<li><a href="#">Rovera 4WD Robot</a></li>
					</ul>
					<p><a href="#">See all</a></p>
				</aside><!--[END .four-column]-->
				<aside id="discussions" class="widget">
					<h3>Discussions</h3>
					<ul>
						<li><a href="#">Marshmallow Shooters</a></li>
						<li><a href="#">SpinBots</a></li>
						<li><a href="#">BrushBots</a></li>
						<li><a href="#">Rovera 4WD Robot</a></li>
					</ul>
					<p><a href="#">See all</a></p>
				</aside><!--[END .four-column]-->
				<aside id="activity" class="widget">
					<h3>Activity</h3>
					<ul>
						<li><a href="#">Marshmallow Shooters</a></li>
						<li><a href="#">SpinBots</a></li>
						<li><a href="#">BrushBots</a></li>
						<li><a href="#">Rovera 4WD Robot</a></li>
					</ul>
					<p><a href="#">See all</a></p>
				</aside><!--[END .four-column]-->
				<aside id="blog" class="widget">
					<h3>Blogs</h3>
					<ul>
						<li><a href="#">Marshmallow Shooters</a></li>
						<li><a href="#">SpinBots</a></li>
						<li><a href="#">BrushBots</a></li>
						<li><a href="#">Rovera 4WD Robot</a></li>
					</ul>
					<p><a href="#">See all</a></p>
				</aside><!--[END .four-column]-->*/ ?>
			<?php endif; // end sidebar widget area ?>
			<?php do_action( 'before_sidebar' ); ?>
		</div><!-- #secondary .widget-area -->
