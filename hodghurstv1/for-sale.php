<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Item For Sale Template
 */

get_header(); ?>

<div class="container">
	<div class="white-bar generic-page stock-page">
		<div class="padded-content">
			<div class="wrapper-100">

            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>

		        <?php if (have_posts()) : while (have_posts()) : the_post();?>
			    <h1><?php the_title(); ?></h1>
			    <?php the_content(); ?>
		       	    <?php endwhile; endif; ?>
                    <a href="<?php echo get_page_link(39); ?>">Contact us for more details</a>            
			</div>
		
		</div>
	</div>
</div>
   

<?php get_footer(); ?>
