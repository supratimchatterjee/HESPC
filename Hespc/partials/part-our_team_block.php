
<!--Section : Our Team-->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block our-team" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?> id="our-team">
	<div class="uk-container uk-container-center">
		<div class="uk-width-9-10 uk-container-center">
			<div class="uk-text-uppercase uk-h1"><?php the_sub_field('title');?></div>
			<div class="spacer-v-5"></div>
			<div class="uk-grid uk-hidden-small" data-uk-grid="{cls: 'uk-margin-top'}">
				<div class="uk-width-medium-1-2">
					<!--Image switcher-->
					<ul class="uk-grid image-switcher" data-uk-margin="{cls: 'single-resource-category-margin'}" data-uk-switcher="{connect:'#switcher-content-1'}">
						<?php if( have_rows('our_team') ): ?>
							<?php while( have_rows('our_team') ): the_row(); ?>
						<li class="uk-width-medium-1-3 uk-active">
							<a href="#">
								<figure class="uk-overlay  uk-overlay-hover">
									<img src="<?php the_sub_field('image');?>">
									<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
										<div>
											<h5><?php the_sub_field('title');?></h5>
											<h6><?php the_sub_field('position');?></h6>
										</div>
									</figcaption>
								</figure>
							</a>
						</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<!--End-->
				</div>
				<div class="uk-width-medium-1-2">
					<!--Content items-->
					<ul id="switcher-content-1" class="uk-switcher switcher-content">
						<?php if( have_rows('our_team') ): ?>
							<?php while( have_rows('our_team') ): the_row(); ?>
						<li class="uk-flex uk-flex-center uk-active">
							<!--Item Content-->
							<div class="uk-width-medium-8-10">
								<img src="<?php the_sub_field('image');?>">
								<div class="spacer-v-3"></div>
								<h5 class="uk-text-uppercase"><?php the_sub_field('title');?></h5>
								<div class="spacer-v-1"></div>
								<h6><?php the_sub_field('position');?></h6>
								<div class="spacer-v-2"></div>
								<p>
									<?php the_sub_field('content');?>
								</p>
							</div>
							<!--End-->
						</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<!--End-->
				</div>
			</div>
			<div class="uk-visible-small switcher-content" data-uk-slideset="{default: 1, autoplay: true}">
				<div class="uk-slidenav-position">
					<ul class="uk-grid uk-grid-collapse uk-slideset">
						<?php if( have_rows('our_team') ): ?>
							<?php while( have_rows('our_team') ): the_row(); ?>
						<li>
							<!--Item Content-->
							<img src="<?php the_sub_field('image');?>">
							<div class="spacer-v-3"></div>
							<h5 class="uk-text-uppercase"><?php the_sub_field('title');?></h5>
							<div class="spacer-v-1"></div>
							<h6><?php the_sub_field('position');?></h6>
							<div class="spacer-v-2"></div>
							<p>
								<?php the_sub_field('content');?>
							</p>
							<!--End-->
						</li>
							<?php endwhile; ?>
						<?php endif;?>
					</ul>
				</div>
				<ul class="uk-slideset-nav uk-dotnav uk-flex-center">
					<?php if( have_rows('our_team') ): ?>
						<?php $i = 0; ?>
						<?php while( have_rows('our_team') ): the_row(); ?>
					<li data-uk-slideset-item="<?php echo $i;?>" <?php if($i == 0):?>class="uk-active"<?php endif;?>><a></a></li>
						<?php $i++; ?>
						<?php endwhile; ?>
					<?php endif;?>

				</ul>
			</div>
		</div>
	</div>
</section>
