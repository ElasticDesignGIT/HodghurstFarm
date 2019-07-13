<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
  Template Name: Shop Template
 */

get_header(); ?>

<div class="container">
	<div class="white-bar">
		<div class="padded-content">
			<?php while (have_posts()) : the_post(); ?>
				<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
				<?php the_content(); ?>
			<?php endwhile;?>
				
			<div class="wrapper-container with-margin">
				<div class="wrapper-33">
					<div class="block">
						<div class="block__image">
							<a href="/product-category/beef"><img src="<?php bloginfo('template_directory'); ?>/assets/images/beef.jpg" alt="Beef"/></a>
						</div>
						<div class="block__text">
							<h2><a href="/product-category/beef">Beef</a></h2>
							<p><a href="/product-category/beef">View our beef range &rsaquo;</a></p>
						</div>
					</div>
				</div>
				<div class="wrapper-33">
					<div class="block">
						<div class="block__image">
							<a href="/product-category/free-range-pork"><img src="<?php bloginfo('template_directory'); ?>/assets/images/pork.jpg" alt="Pork"/></a>
						</div>
						<div class="block__text">
							<h2><a href="/product-category/free-range-pork">Free Range Pork</a></h2>
							<p><a href="/product-category/free-range-pork">View our pork range &rsaquo;</a></p>
						</div>
					</div>
				</div>
				<div class="wrapper-33">
					<div class="block">
						<div class="block__image">
							<a href="/product-category/free-range-chicken"><img src="<?php bloginfo('template_directory'); ?>/assets/images/chicken.jpg" alt="Chicken"/></a>
						</div>
						<div class="block__text">
							<h2><a href="/product-category/free-range-chicken">Free Range Chicken</a></h2>
							<p><a href="/product-category/free-range-chicken">View our chicken range &rsaquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="wrapper-container with-margin">
				<div class="wrapper-33">
					<div class="block">
						<div class="block__image">
							<a href="/product-category/lamb"><img src="<?php bloginfo('template_directory'); ?>/assets/images/lamb.jpg" alt="Lamb"/></a>
						</div>
						<div class="block__text">
							<h2><a href="/product-category/lamb">Lamb</a></h2>
							<p><a href="/product-category/lamb">View our lamb range &rsaquo;</a></p>
						</div>
					</div>
				</div>
				<div class="wrapper-33">
					<div class="block">
						<div class="block__image">
							<a href="/product-category/gluten-free"><img src="<?php bloginfo('template_directory'); ?>/assets/images/gluten-free.jpg" alt="Gluten Free"/></a>
						</div>
						<div class="block__text">
							<h2><a href="/product-category/gluten-free">Gluten Free Range</a></h2>
							<p><a href="/product-category/gluten-free">View our Gluten Free range &rsaquo;</a></p>
						</div>
					</div>
				</div>
				<div class="wrapper-33">
					<div class="block">
						<div class="block__image">
							<a href="/product-category/sweet-treats"><img src="<?php bloginfo('template_directory'); ?>/assets/images/cake.jpg" alt="Cake"/></a>
						</div>
						<div class="block__text">
							<h2><a href="/product-category/sweet-treats">Sweet Treats</a></h2>
							<p><a href="/product-category/sweet-treats">View some sweet treats &rsaquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>


<?php get_footer(); ?>
