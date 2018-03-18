<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jeffhelp_payspi
 */

get_header(); ?>

	<!--Banner-->
	  <div class="site-banner">
	   <div class="uk-slidenav-position" data-uk-slideshow>
		   <ul class="uk-slideshow">
			   <li><img src="<?php the_field('banner_image','option');?>"></li>
		   </ul>
	   </div>
	  </div>
	  <!--End-->

	  <!--Main content-->
	  <div class="blog tm-block-large">
		<div class="uk-container uk-container-center">
			<div class="uk-grid" data-uk-margin>
				<div class="uk-width-medium-3-10">
					<?php dynamic_sidebar('sidebar-1');?>
				</div>
					<div class="uk-width-medium-7-10">
					   <?php if(have_posts() ): ?>
						   <?php while(have_posts() ) : the_post(); ?>
							   <?php
							  $sf_image = get_post_thumbnail_id();
							  $sf_image  = wp_get_attachment_image_src( $sf_image, 'full');
							  $sf_image = $sf_image[0];
							  ?>
							 <?php $type = get_field('type_blog');?>
							 <?php if($type == 'Workshops'): ?>
								<div class="uk-panel uk-panel-default blog-item">
									<div class="panel-top uk-position-relative">
										<div class="ribbon">
											<h5>Workshops</h5>
										</div>
									</div>
									<div class="panel-content">
										<span class="date"><?php echo get_the_date( 'j M'); ?></span>
										<div class="spacer-v-2"></div>
										<h3><?php the_title();?></h3>
										<div class="spacer-v-5"></div>
										<?php $content = get_the_content();?>
										<?php echo wp_trim_words($content, 25, '...' );?>
										<div class="spacer-v-4"></div>
										<div class="uk-clearfix">
											<div class="uk-float-left read-more">
												<a href="<?php the_permalink(); ?>">Read More</a>
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
								<div class="spacer-v-6"></div>
								 <?php elseif($type == 'General Info'): ?>
								<div class="uk-panel uk-panel-default blog-item">
									<div class="panel-top uk-position-relative">
										<img class="uk-width-1-1" src="<?php echo $sf_image;?>">
										<div class="ribbon">
											<h5>General Info</h5>
										</div>
									</div>
									<div class="panel-content">
										<span class="date"><?php echo get_the_date( 'j M'); ?></span>
										<div class="spacer-v-2"></div>
										<h3><?php the_title();?></h3>
										<div class="spacer-v-5"></div>
										<?php $content = get_the_content();?>
										<?php echo wp_trim_words($content, 25, '...' );?>
										<div class="spacer-v-4"></div>
										<div class="uk-clearfix">
											<div class="uk-float-left read-more">
												<a href="<?php the_permalink(); ?>">Read More</a>
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
								<div class="spacer-v-6"></div>
								<?php elseif($type == 'Gallery'): ?>
								<div class="uk-panel uk-panel-default blog-item">
									<div class="panel-top uk-position-relative">
										<?php $images = get_field('gallery'); ?>
										<h1><?php $total = count($images); ?></h1>
										<?php if( $images ): ?>
											<?php $i = 1;?>
											<?php $max = 4; ?>
										<div class="uk-grid" data-uk-grid data-uk-margin="{cls: 'uk-margin-top'}">
											<?php foreach( $images as $image ): ?>
												<?php
												$sf_image = $image['ID'];
												$sf_image  = wp_get_attachment_image_src( $sf_image,array(400,400));
												$sf_image = $sf_image[0];
												?>
												<div class="uk-width-medium-1-2">
												<?php if ( in_array($i, array(1,2,3) )) : ?>
													<img src="<?php echo $sf_image;?>">
													<?php elseif ($i == 4) : ?>
													<figure class="uk-overlay">
														<img src="<?php echo $sf_image;?>">
														<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
															<div>
																<div class="uk-h1 uk-text-center">
																	<?php $subtraction = 4;?>
																	<?php echo $total-$subtraction; ?>
																</div>
																<h3 class="uk-text-center">Photos</h3>
															</div>
														</figcaption>
													</figure>
													<?php else: ?>
												<?php endif;?>
												</div>
											<?php $i++; ?>
											<?php endforeach; ?>
										</div>
										<?php endif;?>
										<div class="ribbon">
											<h5>Gallery</h5>
										</div>
									</div>
									<div class="panel-content">
										<span class="date"><?php echo get_the_date( 'j M'); ?></span>
										<div class="spacer-v-2"></div>
										<h3><?php the_title()?></h3>
										<div class="spacer-v-5"></div>
										<?php $content = get_the_content();?>
										<?php echo wp_trim_words($content, 25, '...' );?>
										<div class="spacer-v-4"></div>
										<div class="uk-clearfix">
											<div class="uk-float-left read-more">
												<a href="<?php the_permalink(); ?>">Read More</a>
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
								<div class="spacer-v-6"></div>
								<?php elseif($type == 'Videos'): ?>
								<div class="uk-panel uk-panel-default blog-item">
									<div class="panel-top uk-position-relative">
										<div class="embed-container">
											<?php the_field('video_url'); ?>
										</div>
										<div class="ribbon">
											<h5>Videos</h5>
										</div>
									</div>
									<div class="panel-content">
										<span class="date"><?php echo get_the_date( 'j M'); ?></span>
										<div class="spacer-v-2"></div>
										<h3>Share the Love</h3>
										<div class="spacer-v-5"></div>
										<?php $content = get_the_content();?>
										<?php echo wp_trim_words($content, 25, '...' );?>
										<div class="spacer-v-4"></div>
										<div class="uk-clearfix">
											<div class="uk-float-left read-more">
												<a href="<?php the_permalink();?>">Read More</a>
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
							<?php endif;?>
						<?php endwhile; ?>
						<?php wp_pagenavi(); ?>
					<?php endif;?>

				</div>
			</div>
		</div>
	  </div>
	  <!--End-->

<?php
get_footer();
