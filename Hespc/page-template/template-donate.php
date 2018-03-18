 <?php
/**
 * The template for displaying all pages
 *
 * Template Name: Donate Now
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
		<div class="donation-page tm-block-large" style="background: url('<?php the_sub_field('background_image'); ?>') repeat scroll 0 0;">
			<div class="uk-container uk-container-center">
				<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
					<div class="uk-width-medium-6-10">
						<div class="donation-box">
							<?php $code = get_field('short_code'); ?>
							<?php echo do_shortcode($code); ?>
							<div class="tm-info uk-margin-large-top">
								<hr>
								<?php the_field('left_column_content'); ?>
							</div>
						</div>
					</div>
					<div class="uk-width-medium-4-10">
						<div class="uk-panel tm-card">
							<div class="panel-image">
								<img class="uk-width-1-1" src="<?php the_field('image_right')?>">
							</div>
							<div class="panel-content">
								<?php the_field('right_column_content'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End-->
	<?php endwhile; // End of the loop.?>

<?php
get_footer();
