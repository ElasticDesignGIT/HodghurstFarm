<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: News Template
 */

get_header(); ?>

<div class="container">
	<div class="white-bar news-page">
		<div class="padded-content">
			<div class="wrapper-100">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>

				<ul class="news-list">
					<?php query_posts('category_name=news'); while (have_posts()) : the_post(); ?>
	
					<li>	
				

						<h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
						<p class="date"><?php the_date() ?></p>
						<p><?php the_excerpt(); ?></p>
						<p><a href="#">Read more &rsaquo;</a></p>
					</li>
					<?php endwhile; ?>
	
					<?php wp_reset_query(); ?>
	
				
				</ul>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
