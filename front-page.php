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