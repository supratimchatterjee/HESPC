<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					<?php $global = get_field('banner_image_global','option'); ?>
					<?php if( $global):?>
					<li><img src="<?php echo $global;?>"></li>
					<?php endif;?>
			   </ul>
		   </div>
		  </div>
		  <!--End-->

		  <!--Main content-->
		  <div class="blog blog-single tm-block-large">
			<div class="uk-container uk-container-center">
				<div class="uk-grid" data-uk-margin>
					<div class="uk-width-medium-3-10">
						<?php dynamic_sidebar('sidebar-1');?>
					</div>
					<div class="uk-width-medium-7-10">
						<div class="uk-panel uk-panel-default blog-item">
							<div class="panel-top uk-position-relative">
								<?php $type = get_field('type_blog');?>
								<?php if($type == 'Workshops'): ?>
									<?php elseif($type == 'General Info'): ?>
									<img class="uk-width-1-1" src="<?php echo $sf_image;?>">
									<?php elseif($type == 'Gallery'): ?>
										<?php $images = get_field('gallery'); ?>
										<?php if( $images ): ?>
										<div class="uk-grid" data-uk-grid data-uk-margin="{cls: 'uk-margin-top'}">
											<?php foreach( $images as $image ): ?>
												<?php
												$sf_image = $image['ID'];
												$sf_image  = wp_get_attachment_image_src( $sf_image,array(400,400));
												$sf_image = $sf_image[0];
												?>
												<div class="uk-width-medium-1-2">
													<img src="<?php echo $sf_image;?>">
												</div>
											<?php endforeach; ?>
										</div>
										<?php endif;?>
									<?php elseif($type == 'Videos'): ?>
									<div class="embed-container">
									<?php the_field('video_url'); ?>
									</div>
								<?php endif;?>
							</div>
							<div class="panel-content">
								<span class="date"><?php echo get_the_date( 'j M'); ?></span>
								<div class="spacer-v-2"></div>
								<h3><?php the_title();?></h3>
								<div class="spacer-v-5"></div>
								<?php $type = get_field('type_blog');?>
								<?php if($type == 'Workshops'): ?>
									<?php the_content();?>
									<?php elseif($type == 'General Info'): ?>
									<?php the_content();?>
									<?php elseif($type == 'Gallery'): ?>
									<?php the_content();?>
									<?php elseif($type == 'Videos'): ?>
									<?php the_content();?>
								<?php endif;?>
								<div class="spacer-v-4"></div>
								<div class="uk-clearfix">
									<div class="uk-float-left read-more">
										<?php $cats = get_the_terms( $post->ID, 'category' ); ?>
										<?php foreach($cats as $cat) : ?>
											<span class="tag">#<?php echo $cat -> name; ?></span>
										<?php endforeach; ?>
									</div>
									<div class="uk-float-right social-share">
										<div>
											<span>Share</span>
											<a href="https://www.facebook.com/"><i class="uk-icon-facebook"></i></a>
											<a href="https://www.twitter.com/"><i class="uk-icon-twitter"></i></a>
											<a href="https://www.linkedin.com/"><i class="uk-icon-linkedin"></i></a>
										</div>
									</div>
								</div>
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
