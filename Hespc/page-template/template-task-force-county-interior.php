 <?php
/**
 * The template for displaying all pages
 *
 * Template Name: Task Force County Interior
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
  			   <ul class="uk-slideshow uk-overlay-active">
  				   <?php
  					 $sf_image = get_post_thumbnail_id();
  					 $sf_image  = wp_get_attachment_image_src( $sf_image, 'full');
  					 $sf_image = $sf_image[0];
  					 ?>
  				   <?php $id = $post->ID; ?>
  				   <?php $link = get_field('link_banner',$id); ?>
  				   <?php $global = get_field('banner_image_global','option'); ?>
  				   <?php if( $sf_image):?>
  				   <li>
  					   <img src="<?php echo $sf_image;?>">
					   <?php if($link): ?>
  					   <a class="uk-overlay-panel" href="<?php echo $link;?>"></a>
					   <?php endif; ?>
  				   </li>
  				   <?php else:?>
  				   <li>
  					   <img src="<?php echo $global;?>">
					   <?php if($link): ?>
  					   <a class="uk-overlay-panel" href="<?php echo $link;?>"></a>
					   <?php endif; ?>
  				   </li>
  				   <?php endif;?>
  			   </ul>
  		   </div>
		</div>
		  <!--End-->

		  <!--Main content-->
		  <div class="task-force-interior uk-block">
			<div class="uk-container uk-container-center">
				<div class="uk-h1 uk-text-center uk-text-uppercase">
			  		<strong><?php the_title();?></strong>
					<?php echo do_shortcode('[breadcrumb]'); ?>
			  	</div>
			  	<div class="tm-breadcumb">

			  	</div>
			  	<div class="spacer-v-3"></div>
			  	<hr>
			  	<div class="page-edit-section uk-clearfix">
				  	<div class="uk-float-right">
				  		<div>
				  			<a href="#content-pop-up" data-uk-modal  class="uk-h5 uk-text-capitalize">Edit page content</a>

				  		</div>
				  	</div>
			  	</div>
				<div class="uk-grid county-card-grid" data-uk-margin="{cls:'single-task-force-margin'}" data-uk-grid-match="{target:'.uk-grid'}">
				<?php if( have_rows('county_card') ): ?>
					<?php while( have_rows('county_card') ): the_row(); ?>
					<div class="uk-width-medium-1-2">
						<div class="county-card">
							<h5 class="uk-text-capitalize"><?php the_sub_field('title');?></h5>
							<div class="spacer-v-1"></div>
							<div class="uk-grid">
								<div class="uk-width-medium-1-2">
									<?php the_sub_field('left_content');?>
								</div>
								<div class="uk-width-medium-1-2">
									<?php the_sub_field('right_content');?>
								</div>
							</div>
							<div class="spacer-v-3"></div>
							<div class="uk-clearfix">
								<div class="uk-float-right tm-share">

								</div>
							</div>
						</div>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>

					<div id="content-pop-up" class="uk-modal">
						<div class="uk-modal-dialog">
							<a class="uk-modal-close uk-close"></a>
							<?php $title = get_the_title($post->ID)?>
							<?php $link = get_the_permalink($post->ID)?>
							<?php echo do_shortcode('[gravityforms id="2" title="false" ajax="true" field_values="page_title='.$title.'&amp;page_url='.$link.'"]'); ?>
						</div>
					</div>

				</div>
			</div>
		  </div>
		  <!--End-->
	<?php endwhile; // End of the loop.?>

<?php
get_footer();
