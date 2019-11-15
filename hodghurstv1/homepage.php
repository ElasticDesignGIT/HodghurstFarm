<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Homepage
 */

get_header(); ?>

<div class="container">
	<div class="white-bar">
		<div class="padded-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
					<!--end of loop-->
		<?php endwhile; else: ?>

		<p>Sorry, no posts to list</p>

		<?php endif; ?>
	</div>
				
		
		<div class="wrapper-100 bg--yellow">
			<div class="padded-content">
				<div class="wrapper-container with-margin">

					<div class="wrapper-33">
						<img src="<?php the_field('homepage_photo_1'); ?>" alt="Nick and Helen on the farm" class="border tilt-left"/>
					 </div>


					<div class="wrapper-66">

							<?php the_field('homepage_photo_content_1'); ?>
						<div class="fb-like" data-href="https://www.facebook.com/hodghurstfarm" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</div>
				</div>
			</div>
	</div>
</div>


<?php get_footer(); ?>
