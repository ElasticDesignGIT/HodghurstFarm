<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Contact Form
 */

get_header(); ?>

<div class="container">
	<div class="white-bar contact-page">
		<div class="padded-content">
			<div class="wrapper-100">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
   
			</div>

			<div class="wrapper-container with-margin">
				<div class="wrapper-50">
					<h2>Contact form</h2>
					<?php echo do_shortcode( '[si-contact-form form="1"]' ) ?>
				</div>
				<div class="wrapper-50">
					<h3>How to find Hodghurst Farm</h3>
					<div class="item-container">
						<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2029.2686840297938!2d-2.8008061!3d52.5767452!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48707344c2f64603%3A0xd5c16016ecebdd7f!2sAll+Stretton%2C+Church+Stretton+SY6+6LF!5e1!3m2!1sen!2suk!4v1478175762146" width="400" height="325" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
					</div>
					<h3 style="margin-top:24px">How to find Red House Farm</h3>
					<div class="item-container">
						<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2260.06533693447!2d-2.6700829!3d52.5600471!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487071103125256d%3A0xb541367da29741c0!2sMuch+Wenlock+TF13+6ED%2C+UK!5e1!3m2!1sen!2sus!4v1478175822327" width="400" height="325" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
