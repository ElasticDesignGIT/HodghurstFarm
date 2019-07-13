<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Recipe Page
 */

get_header(); ?>

			
<?php if (have_posts()) : while (have_posts()) : the_post();?>	

<div class="container">
	<div class="white-bar generic-with-side">
		<div class="padded-content">
			<p><a href="<?php the_permalink(293);?>">&laquo; Back to all recipes</a></p>
			<div class="wrapper-container with-margin">
				<div class="wrapper-66">
					<h1><?php echo get_the_title(); ?></h1>
					<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
					<?php the_content(); ?>
				</div>

				<div class="wrapper-33">
					<div class="image-with-caption tilt-right">
						<?php if ( has_post_thumbnail()) : ?>
					   		<?php the_post_thumbnail(); ?>
					 	<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>
