<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
  Template Name: Sitemap
 */

get_header(); ?>


<div class="container">
	<div class="white-bar generic-page">
		<div class="padded-content">
			<div class="wrapper-container with-margin">
				<div class="wrapper-100">

				     <h1>Sitemap</h1>
    
				    <?php $args = array(
					'depth'        => 0,
					'show_date'    => '',
					'date_format'  => get_option('date_format'),
					'child_of'     => 0,
					'exclude'      => '',
					'include'      => '',
					'title_li'     => __(''),
					'echo'         => 1,
					'authors'      => '',
					'sort_column'  => 'menu_order, post_title',
					'link_before'  => '',
					'link_after'   => '',
					'walker'       => '',
					'post_type'    => 'page',
				    'post_status'  => 'publish' 
						);
				wp_list_pages( $args ); 
				?>  
     				</div>
			</div>
		</div>
	</div>
</div>

   <?php get_footer(); ?>
