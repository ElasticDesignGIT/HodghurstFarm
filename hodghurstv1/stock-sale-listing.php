<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Stock Sale Listing Template
 */

get_header(); ?>

<div class="container">
	<div class="white-bar generic-page stock-page">
		<div class="padded-content">
			<div class="wrapper-100">

		        <?php if (have_posts()) : while (have_posts()) : the_post();?>
			    <h1><?php the_title(); ?></h1>
			    <?php the_content(); ?>
		       	<?php endwhile; endif; ?>
                           
			</div>

            <?php if( have_rows('stock_repeater') ): ?>

            <div class="wrapper-100">
                <ul class="stock-listing">

                <?php while( have_rows('stock_repeater') ): the_row(); 

                    // vars
                    $image = get_sub_field('stock_photo');
                    $stock_name = get_sub_field('stock_name');
                    $stock_link = get_sub_field('stock_link');

                    ?>
                    <li>
                 
                        <a href="<?php echo $stock_link; ?>">
                        <img  src="<?php echo $image; ?>" alt="stock photo"></a>
                    
                        <h3><a href="<?php echo $stock_link; ?>">
                        <?php echo $stock_name; ?></a></h3>
                    </li>

                    <?php endwhile; ?>
                </ul>
            </div>

            <?php endif; ?>

		</div>
	</div>
</div>
   

<?php get_footer(); ?>
