<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 */

get_header(); ?>

<div class="container">
	<div class="white-bar">
		<div class="padded-content">
			<?php query_posts('p=15'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
				<?php the_content(); ?>
			<?php endwhile;?>
				
			<div class="wrapper-container with-margin">
		<!---		<div class="wrapper-50">
					<div class="block">
						<div class="block__image">
							<a href="<?php the_permalink(60);?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/pigs-on-farm.jpg" alt="Pigs on the farm"/></a>
						</div>
						<div class="block__text">
							<h2><a href="<?php the_permalink(60);?>">Our Farm Shop</a></h2>
							<p>All of our local produce is gluten free. Order online or come and visit us!</p>
							<p><a href="<?php the_permalink(60);?>">Our farm shop &rsaquo;</a></p>
						</div>
					</div>
				</div>
				<div class="wrapper-50">
					<div class="block">
						<div class="block__image">
							<a href="<?php the_permalink(648);?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/pigs-on-farm.jpg" alt="Pigs on the farm"/></a>
						</div>
						<div class="block__text">
							<h2><a href="<?php the_permalink(648);?>">Our Animals</a></h2>
							<p>We like to know where our food comes from, what it has eaten and that it has had a happy life</p>
							<p><a href="<?php the_permalink(648);?>">More about our animals &rsaquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="wrapper-100 bg--yellow">
			<div class="padded-content">
				<?php query_posts('p=25'); ?>
				<div class="wrapper-container with-margin">
					<div class="wrapper-33">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/nick-and-helen-on-farm.jpg" alt="Nick and Helen on the farm" class="border tilt-left"/>
					 </div>

					<div class="wrapper-66">
						
						<?php while (have_posts()) : the_post(); ?>
							<div class="edit"><?php edit_post_link('Edit this', '', ''); ?></div>
							<?php the_content(); ?>
						<?php endwhile;?>
						<div class="fb-like" data-href="https://www.facebook.com/hodghurstfarm" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_footer(); ?>
