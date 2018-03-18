<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package jeffhelp_payspi
 */

get_header(); ?>

	<!--Banner-->
	  <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
	  	<ul class="uk-slideshow uk-slideshow-fullscreen">
	  		<li>
	  			<img src="<?php the_field('banner_image_global','option');?>">
	  			<div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
	  			</div>
	  		</li>
	  	</ul>
	  </div>

	  <!--End-->

	  <!--Main content-->
	  <!--Section : Our Mission Block-->
	  	<section class="uk-block tm-block-large our-mission-block">
		  	<div class="uk-container uk-container-center">
			  <!--Content area-->
				  	<div class="uk-width-medium-8-10 uk-container-center">
					 <h2 class="uk-text-uppercase"><?php _e('Search Results for','jeffhelp_payspi');?> <strong>"<?php the_search_query(); ?>"</strong> <?php $total_results = $wp_query->found_posts; echo ": " .$total_results. " "; ?></h2>
					  <div class="spacer-v-6"></div>
					  	<?php if( have_posts() ): ?>
						 	<?php while(have_posts() ) : the_post(); ?>
						  	<div>
								<a href="<?php the_permalink();?>">
								<h4 class="uk-text"><i class="uk-icon-arrow-right"></i><?php the_title();?></h4>
								</a>
							  <div class="spacer-v-2"></div>
						  	</div>
							<?php endwhile; ?>
						<?php endif;?>
				  	</div>

			  <!--End-->
		  	</div>
	  	</section>
	  <!--End-->
	  <!--End-->


<?php
get_footer();
