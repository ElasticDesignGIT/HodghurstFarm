<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 */

get_header(); ?>

<div class="container" id="woocommerce">
	<div class="white-bar contact-page">
		<div class="padded-content">
			<div class="wrapper-100 ">
			<div class="woocommerce">
				<?php woocommerce_content(); ?>
			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
