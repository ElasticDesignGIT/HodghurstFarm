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
			<p><a href="<?php the_permalink(656);?>">&laquo; Back to News</a></p>
			<div class="wrapper-100">
		        <?php if (have_posts()) : while (have_posts()) : the_post();?>
			    <h1><?php the_title(); ?></h1>
			    <p class="date"><?php the_date(); ?></p>
			    <?php the_content(); ?>
		       	    <?php endwhile; endif; ?>
            
			</div>
		
		</div>
	</div>
</div>
   

<?php get_footer(); ?>
