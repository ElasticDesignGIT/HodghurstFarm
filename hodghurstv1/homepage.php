<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 Template Name: Homepage
 */

get_header(); ?>

<section class="left-column">
				<h1>Welcome to Hodghurst Farm </h1>
				<p>We are a family run business, who's aim is to supply you with free range, slowly grown food that has been born and raised on the farm. We keep rare breed pigs, chickens, <a href="#">sheep</a> and cattle. The animals graze in fields between the beautiful rolling South Shropshire Hills, on a predominantly grass based diet. Any supplementary feed is obtained locally and milled and mixed on farm, so we know that no growth promoters or antibiotics are in there. </p>

				<div class="animal-block">
					<ul>
						<li><a href="#" class="pigs"></a></li>
						<li><a href="#" class="sheep"></a></li>
						<li><a href="#" class="cattle"></a></li>
					<li><a href="#" class="poultry"></a></li>
					</ul>
				</div>

				<p>We are a family run business, who's aim is to supply you with free range, slowly grown food that has been born and raised on the farm. We keep rare breed pigs, chickens, <a href="#">sheep</a> and cattle. The animals graze in fields between the beautiful rolling South Shropshire Hills, on a predominantly grass based diet. Any supplementary feed is obtained locally and milled and mixed on farm, so we know that no growth promoters or antibiotics are in there. </p>

				<p><small>*Free local deliveries on orders over £30 </small></p>

				<article class="notice-board">
					<div class="with-pin"><img src="<?php bloginfo('template_directory'); ?>/assets/images/pin.png" alt=""/></div>
					<div class="board-content">
						<h2>Special Offers</h2>
						<p>test wetrsf sdfdsf sdf </p>
					</div>
				</article>
			</section>
			<aside class="right-column">
				<figure class="tilt-right">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/nick-and-helen-on-farm.jpg" alt="Nick and Helen on the farm"/>
					<figcaption>Nick and Helen process and package the meat from their home in Edgton. Ella is happy to watch the sausage machine for hours and will hopefully take over this part of the process in a few years!</figcaption>
				</figure>
				<figure class="tilt-left">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/sam-helping-on-farm-pigs.jpg" alt="Sam helping on the farm with the pigs"/>
					<figcaption>Sam and his brother Jack are looking forward to moving to the farm with their mum and dad in 2014 so they can help granddad and grandma with the pigs and the chickens </figcaption>
				</figure>
			</aside>

<?php get_footer(); ?>
