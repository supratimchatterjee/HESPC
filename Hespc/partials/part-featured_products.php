

<!--Section : Featured Products-->
		<?php $color = get_sub_field('background_color'); ?>
		<section class="featured-product-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
			<div class="uk-container uk-container-center">
				<div class="uk-grid uk-flex-middle" data-uk-margin="{cls: 'uk-margin-top'}">
					<div class="uk-width-medium-1-4">
						<div class="spacer-v-2 uk-visible-small"></div>
						<h4><?php the_sub_field('sub_title')?></h4>
						<div class="spacer-v-1"></div>
						<h3><?php the_sub_field('title')?></h3>
						<div class="spacer-v-1"></div>
						<a href="<?php the_sub_field('products_link')?>" class="uk-text-capitalize see-more">See All Products</a>
					</div>
					<div class="uk-width-medium-3-4">
						<div data-uk-slideset="{small: 1, medium: 3, large: 3, autoplay: true}">
							<div class="uk-slidenav-position">
								<?php
							     $args = array( 'post_type' => 'product', 'posts_per_page' =>-1,
								 'tax_query' => array(
								  	array(
									  'taxonomy' => 'product_visibility',
									  'field'    => 'name',
									  'terms'    => 'featured',
									  'operator' => 'IN'
								  		),
					   				),
 								);?>
							     <?php $loop = new WP_Query( $args );?>
							     <?php if ( $loop->have_posts() ) :?>
								<ul class="uk-grid uk-grid-collapse uk-slideset">
									<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
										<?php
										$sf_image = get_post_thumbnail_id( $loop->post->ID );
										$sf_image  = wp_get_attachment_image_src( $sf_image, 'large');
										$sf_image = $sf_image[0];
										?>
									<li class="uk-text-center">
										<figure class="uk-overlay uk-overlay-hover">
										    <img src="<?php echo $sf_image;?>" alt="">
										    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
										    	<div class="uk-text-center">
										    		<h5 class="uk-text-uppercase"><?php the_terms( $loop->post->ID, 'product_cat', '', ' / ' ); ?><sup>tm</sup></h5>
										    		<div class="spacer-v-1"></div>
										    		<h6 class="uk-text-capitalize"><?php echo get_the_title( $loop->post->ID ) ?></h6>
										    	</div>
												<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="uk-position-cover"></a>
										    </figcaption>
										</figure>
									</li>
									<?php endwhile;?>
								</ul>
								<?php endif;?>
							</div>
							<?php wp_reset_query(); ?>

							<ul class="uk-slideset-nav uk-dotnav uk-flex-center uk-visible-small ">
								<li data-uk-slideset-item="0" class="uk-active"><a></a></li>
								<li data-uk-slideset-item="1"><a></a></li>
								<li data-uk-slideset-item="2"><a></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End-->
