<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jeffhelp_payspi
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!--Banner-->
		<div class="site-banner">
			<div class="uk-slidenav-position" data-uk-slideshow>
			   	<ul class="uk-slideshow uk-overlay-active">
				   	<?php
					 $sf_image = get_post_thumbnail_id();
					 $sf_image  = wp_get_attachment_image_src( $sf_image, 'full');
					 $sf_image = $sf_image[0];
					 ?>
				   	<?php $global = get_field('banner_image_global','option'); ?>
					<?php $event = get_field('banner_event','option'); ?>
					<?php $id = $post->ID; ?>
					<?php $link = get_field('link_banner',$id); ?>

				   	<?php if(is_singular('tribe_events') or is_post_type_archive('tribe_events')): ?>
						 <li><img src="<?php echo $event;?>"></li>
					   	<?php else: ?>
						   <?php if( $sf_image):?>
						   	<li><img src="<?php echo $sf_image;?>">
								<?php if($link): ?>
							<a class="uk-overlay-panel" href="<?php echo $link;?>"></a>
								<?php endif; ?>
							</li>
						   <?php else:?>
						   	<li><img src="<?php echo $global;?>">
								<?php if($link): ?>
							<a class="uk-overlay-panel" href="<?php echo $link;?>"></a>
								<?php endif; ?>
							</li>
					   		<?php endif;?>
					<?php endif;?>

			   </ul>
			</div>
		</div>
		<!--End-->
		<div class="task-force-interior uk-block">
  		  	<div class="uk-container uk-container-center">
				<div class="uk-h1 uk-text-center uk-text-uppercase">
					<strong><?php the_title();?></strong>
				</div>
				<div>
				<?php the_content();?>
				</div>
			</div>
		</div>

		<?php if(is_singular('tribe_events')):?>
			<?php if(tribe_embed_google_map()):?>
			<section class="map-block">
			<?php echo tribe_get_embedded_map (); ?>
			</section>
			<?php endif; ?>
		<?php endif; ?>


	<?php endwhile;?>
<?php endif; ?>
<?php
get_footer();
