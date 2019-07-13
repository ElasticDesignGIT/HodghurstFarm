<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Farm Shop
 */

get_header(); ?>

<section class="full-column">

				
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

                      


			<article class="fifty farm-shop-block">
					<img src="<?php 
					$target_post_id = '448';
					if (has_post_thumbnail($target_post_id) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
					<?php echo $image[0]; ?>
					<?php endif; ?>" alt="Rooms"/>
				</a>
				<div class="padded-content">
					<div class="edit"><?php edit_post_link('Edit this', '', '','448'); ?></div>

					<h2><?php echo get_the_title(448); ?></h2>
					
					<?php query_posts('p=448'); ?>

						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile;
						wp_reset_query();
						?>
				
				</div>
			</article>
			<article class="fifty farm-shop-block">
			
					<img src="<?php 
					$target_post_id = '450';
					if (has_post_thumbnail($target_post_id) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
					<?php echo $image[0]; ?>
					<?php endif; ?>" alt="Rooms"/>
				</a>
				<div class="padded-content">
					<div class="edit"><?php edit_post_link('Edit this', '', '','450'); ?></div>

					<h2><?php echo get_the_title(450); ?></h2>
					
					<?php query_posts('p=450'); ?>
					
						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile;
						wp_reset_query();
						?>
				
				</div>
			</article>
			<div class="clearfix"></div>
<article class="fifty farm-shop-block">
					<img src="<?php 
					$target_post_id = '452';
					if (has_post_thumbnail($target_post_id) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
					<?php echo $image[0]; ?>
					<?php endif; ?>" alt="Rooms"/>
				</a>
				<div class="padded-content">
					<div class="edit"><?php edit_post_link('Edit this', '', '','452'); ?></div>

					<h2><?php echo get_the_title(452); ?></h2>
					<?php query_posts('p=452'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile;
						wp_reset_query();
						?>
				
				</div>
			</article>
			<article class="fifty farm-shop-block">
					<img src="<?php 
					$target_post_id = '453';
					if (has_post_thumbnail($target_post_id) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
					<?php echo $image[0]; ?>
					<?php endif; ?>" alt="Rooms"/>
				</a>
				<div class="padded-content">.
					<div class="edit"><?php edit_post_link('Edit this', '', '','453'); ?></div>

					<h2><?php echo get_the_title(453); ?></h2>
					<?php query_posts('p=453'); ?>

						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile;
						wp_reset_query();
						?>
				
				</div>
			</article>

<div class="clearfix"></div>
				<article class="notice-board">
					<div class="with-pin"><img src="<?php bloginfo('template_directory'); ?>/assets/images/pin.png" alt=""/></div>
					<div class="board-content">
						<?php query_posts('p=17'); ?>
						<div class="edit"><?php edit_post_link('Edit this', '', '', '17'); ?></div>
						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile;
						wp_reset_query();
						?>
					</div>
				</article>    



				
			</section>
			

<?php get_footer(); ?>
