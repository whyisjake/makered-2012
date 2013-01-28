<?php
	/**
	 * The template for displaying the front page.
	 *
	 * This is the template that displays the front page.
	 * Please note that this page template will not display unless you have set a static page as the designated front page. This is set in Settings > Reading.
	 *
	 * @package Mentor.Makerspace.com
	 * @since Mentor.Makerspace.com 1.0
	 */

	get_header(); ?>
		<section id="slider-wrapper">
			<section class="wrapper">
				<aside id="login">
					<?php if(!is_user_logged_in()) : //check if current user is logged in, if they are, hide the login form! :P ?>
						<form name="loginform" id="loginform" action="<?php echo home_url(); ?>/wp-login.php" method="post">
							<div class="alignleft">
								<input type="text" name="log" id="user_login" class="input" value="<?php echo esc_attr($user_login); ?>" placeholder="<?php esc_attr_e('Username', 'mentor_makerspace'); ?>" size="20" tabindex="10" /></label>
							</div>
							<div class="alignleft">
								<input type="password" name="pwd" id="user_pass" class="input " value="<?php echo esc_attr($user_login); ?>" placeholder="<?php esc_attr_e('Password', 'mentor_makerspace'); ?>" size="20" tabindex="20" /></label>
							</div>
							<div class="submit alignleft">
								<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="<?php esc_attr_e('Go', 'mentor_makerspace'); ?>" tabindex="100" />
								<input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>" />
								<input type="hidden" name="testcookie" value="1" />
							</div>
						</form>
					<?php else : ?>
						<p>Welcome, <?php mms_get_get_user_info(); ?>! <a href="<?php echo wp_logout_url(get_permalink()); ?>" class="button">Logout</a></p>
					<?php endif; ?>
				</aside><!--[END #login]-->
				<section id="slider" class="flexslider">
					<?php //mms_get_call_to_action_slider(); ?>
				</section><!--[END #slider.flexslider]-->
			</section><!--[END .wrapper]-->
		</section><!--[END #slider]-->
		<section id="body-wrapper">
			<section class="wrapper group">
				<?php while(have_posts()) : the_post();
					get_template_part('content', 'page');
				endwhile; ?>
			</section><!--[END .wrapper]-->
		</section><!--[END #boy-wrapper] -->
		<section id="footer-wrapper" class="wrapper">
			<section class="three-column">
				<?php if(!dynamic_sidebar('home-footer-1')) : endif; ?>
			</section><!--[END .three-column]-->
			<section class="three-column single-featured-block">
				<?php if(!dynamic_sidebar('home-footer-2')) : ?>
					<h2>Join Our Newsletter</h2>
					<p>We are connecting teachers and students with the vibrant Maker community, as well as the larger DIY movement in general. Sign up for our newsletter to receive exciting updates on our progress!</p>
					<form action="#" class="newsletter-signup">
						<ul class="reset-list">
							<li><input type="checkbox" name="student" id=""> Student</li>
							<li><input type="checkbox" name="" id=""> Teacher</li>
							<li><input type="checkbox" name="" id=""> Parent</li>
							<li><input type="checkbox" name="" id=""> Maker</li>
						</ul><br />
						<input type="text" name="" id="" placeholder="Email Address">
						<input type="submit" value="Go">
					</form>
				<?php endif; ?>
			</section><!--[END .three-column]-->
			<section class="three-column">
				<?php if(!dynamic_sidebar('home-footer-3')) : endif; ?>
			</section><!--[END .three-column]-->
		</section>
	<?php get_footer(); ?>