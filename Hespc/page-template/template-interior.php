<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Interior
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
		           <li><img src="<?php echo $sf_image; ?>"></li>
		       </ul>
		   </div>
		  </div>
		  <!--End-->

		  <!--Main content-->
		  <div class="resource-interior">
		  	<div class="uk-container uk-container-center">
		  		<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
		  			<div class="uk-width-medium-1-4">
		  				<div class="uk-panel uk-panel-box filter-area uk-hidden-small">
                            <div class="uk-panel-teaser">
                            	<div class="uk-overlay">
	                                <img src="<?php the_field('image_side');?>">
	                                <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle">
	                                	<div>
	                                		<img src="<?php the_field('icon_side');?>">
	                                	</div>
	                                </div>
	                            </div>
                            </div>
                            <!--Filter Block-->
                            <ul id="tm-filters" class="uk-list uk-text-right uk-text-center-small tm-filters">
							    <li data-uk-filter=""><a href="">All</a></li>
								<?php if( have_rows('segment') ): ?>
									<?php $i = 1;?>
									<?php while( have_rows('segment') ): the_row(); ?>
							    <li data-uk-filter="filter-<?php echo $i;?>"><a href=""><?php the_sub_field('heading'); ?></a></li>
									<?php $i++; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
                            <!--End-->
                        </div>
		  			</div>
		  			<div class="uk-width-medium-3-4">
		  				<h1 class="uk-text-uppercase"><?php the_field('heading');?></h1>
		  				<p>
		  					<?php the_field('decription');?>
		  				</p>

		  				<!--Mobile Filter-->
		  				<div id="justify" class="mobile-filter uk-visible-small">
                            <div class="uk-button-dropdown uk-width-1-1" data-uk-dropdown="{justify:'#justify', mode:'click'}" aria-haspopup="true" aria-expanded="false">
                                <button id="placeholder" class="uk-width-1-1 filter-dropdown">All</button>
                                <div class="uk-dropdown uk-dropdown-bottom" aria-hidden="true" style="top: 30px; left: 0px; min-width: 823px; margin-left: 0px;" tabindex="">
                                    <ul id="tm-filters1" class="uk-list uk-text-right uk-text-center-small">
									    <li data-value="all" data-uk-filter=""><a>All</a></li>
										<?php if( have_rows('segment') ): ?>
											<?php $i = 1;?>
											<?php while( have_rows('segment') ): the_row(); ?>
									    <li data-value="<?php the_sub_field('heading'); ?>" data-uk-filter="filter-<?php echo $i;?>"><a><?php the_sub_field('heading'); ?></a></li>
											<?php $i++; ?>
											<?php endwhile; ?>
										<?php endif; ?>
									</ul>
                                </div>
                            </div>
                        </div>
		  				<!--End-->

		  				<div data-uk-grid="{controls: '#tm-filters, #tm-filters1'}">
							<?php if( have_rows('segment') ): ?>
								<?php $i = 1;?>
								<?php while( have_rows('segment') ): the_row(); ?>
			  				<div class="tm-record" data-uk-filter="filter-<?php echo $i;?>">
			  					<h2 class="uk-text-uppercase"><?php the_sub_field('heading'); ?></h2>
			  					<div class="uk-grid tm-report" data-uk-margin="{cls:'single-resource-category-margin'}" data-uk-grid-match="{target:'.tm-card'}">
								<?php if( have_rows('blog') ): ?>
									<?php while( have_rows('blog') ): the_row(); ?>
			  						<div class="uk-width-medium-1-2 uk-width-large-1-3">
			  							<div class="uk-panel uk-panel-box tm-card">
			  								<h5><?php the_sub_field('title'); ?></h5>
			  								<p>
			  									<?php the_sub_field('content'); ?>
			  								</p>
			  								<div class="uk-position-absolute tm-more-option">
			  									<div class="uk-clearfix">
			  										<div class="uk-float-left">
			  											<a href="<?php the_sub_field('link'); ?>" class="uk-button">Read now</a>
			  										</div>
			  										<div class="uk-float-right tm-share">
			  											<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/share.png"></a>
			  										</div>
			  									</div>
			  								</div>
			  							</div>
			  						</div>
			  						<?php endwhile; ?>
								<?php endif; ?>
			  					</div>
			  				</div>
								<?php $i++; ?>
								<?php endwhile; ?>
							<?php endif; ?>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <!--End-->
		  	<div class="uk-block all-resources uk-position-relative" style="background: rgba(61, 58, 58, 0.5) url('<?php the_field('image_resourse'); ?>')  none repeat scroll 0 0 ;">
			     <div class="uk-position-relative">
			        <div class="uk-container uk-container-center uk-text-center">
			         	<h2 class="uk-text-uppercase">all resources</h2>
				       	<div class="uk-grid" data-uk-margin>
							<?php global $post;
							$direct_parent = $post->post_parent; ?>
							<?php if( have_rows('resources',$direct_parent) ): ?>
								<?php $i = 0; ?>
								<?php while( have_rows('resources',$direct_parent) ): the_row(); ?>
								<?php	$i++;
									if( $i > 6 )
									{
										break;
									}
									?>
					        <div class="uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-3 uk-width-large-1-6 uk-flex uk-flex-center uk-flex-middle">
						        <div class="uk-position-relative" >
						          <img src="<?php the_sub_field('icon');?>">
						          <h6 class="uk-text-uppercase uk-margin-bottom-remove"><?php the_sub_field('heading');?></h6>
									<a href="<?php the_sub_field('link');?>" class="uk-position-cover"></a>
						        </div>
					        </div>
								<?php endwhile; ?>
							<?php endif; ?>
				        </div>
			        </div>
			     </div>
		  	</div>
	<?php endwhile; // End of the loop.?>

<?php
get_footer();
