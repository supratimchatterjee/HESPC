<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Resources
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jeffhelp_payspi
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();?>
		<!--Banner-->
		  <div class="site-banner">
		   <div class="uk-slidenav-position" data-uk-slideshow>
			   <ul class="uk-slideshow">
				   <?php
				   $sf_image = get_post_thumbnail_id();
				   $sf_image  = wp_get_attachment_image_src( $sf_image, 'full');
				   $sf_image = $sf_image[0];
				   ?>
				   <li><img src="<?php echo $sf_image;?>"></li>
			   </ul>
		   </div>
		  </div>
		  <!--End-->

		  <!--Main content-->
		  <div class="resources">
			<div class="uk-container uk-container-center uk-text-center">
				<h1 class="uk-text-uppercase"><?php the_field('heading');?></h1>
				<div class="uk-width-large-6-10 uk-container-center uk-margin-large-bottom">
					<p>
						<?php the_field('decription');?>
					</p>
				</div>
				<div class="uk-grid resource-category" data-uk-margin="{cls:'single-resource-category-margin'}">
				<?php if( have_rows('resources') ): ?>
					<?php while( have_rows('resources') ): the_row(); ?>
					<div class="uk-width-medium-1-2 uk-width-large-1-3">
						<figure class="uk-overlay">
							<img src="<?php the_sub_field('image');?>" alt="">
							<figcaption class="uk-overlay-panel resource-category-overlay uk-flex uk-flex-center uk-flex-middle">
								<div>
									<img src="<?php the_sub_field('icon');?>">
									<h5 class="uk-text-uppercase"><?php the_sub_field('heading');?></h5>
								</div>
							</figcaption>
							<a href="<?php the_sub_field('link');?>" class="uk-position-cover"></a>
						</figure>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>

				</div>
			</div>
		  </div>
		  <!--End-->
	<?php endwhile; // End of the loop.?>

<?php
get_footer();
