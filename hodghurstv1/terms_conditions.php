<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Terms and Conditions
 */

get_header(); ?>

<section class="full-column">

				<h1>Terms and Conditions</h1>
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>
