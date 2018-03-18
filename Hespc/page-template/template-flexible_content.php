<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Flexible Content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jeffhelp_payspi
 */

get_header(); ?>
	<?php if(have_posts()) : ?>
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
						<?php if($link):?>
						<a class="uk-overlay-panel" href="<?php echo $link;?>"></a>
						<?php endif; ?>
					</li>
					<?php else:?>
					<li>
						<img src="<?php echo $global;?>">
						<?php if($link):?>
						<a class="uk-overlay-panel" href="<?php echo $link;?>"></a>
						<?php endif; ?>
					</li>
					<?php endif;?>
				</ul>
			</div>
		</div>
			<!--End-->
			<?php if( have_rows('page_builder') ):?>
				<?php while ( have_rows('page_builder') ) : the_row();?>
					<?php get_template_part( 'partials/part', get_row_layout() ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endwhile; // End of the loop.?>
	<?php endif;?>
<?php
get_footer();
