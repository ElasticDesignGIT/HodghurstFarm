<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 */


get_header(); ?>

<div class="container">
	<div class="white-bar generic-page">
		<div class="padded-content">
			<div class="wrapper-100">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
   
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
