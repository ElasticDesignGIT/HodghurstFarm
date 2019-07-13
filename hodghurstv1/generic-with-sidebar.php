<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Generic with Side Template
 */

get_header(); ?>

<div class="container">
	<div class="white-bar generic-with-side">
		<div class="padded-content">
			<div class="wrapper-container with-margin">
				<div class="wrapper-66">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>

				<div class="wrapper-33">
					<figure class="image-with-caption tilt-right">
						<?php if ( has_post_thumbnail()) : ?>
					   		<?php the_post_thumbnail(); ?>
							<figcaption></figcaption>
						<?php endif; ?>
					</figure>

					<figure class="image-with-caption tilt-left">
						<?php if (class_exists('MultiPostThumbnails')) :
					    MultiPostThumbnails::the_post_thumbnail(
					        get_post_type(),
						        'secondary-image'
						    );
						endif; ?>
						<figcaption></figcaption>
				</figure>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
