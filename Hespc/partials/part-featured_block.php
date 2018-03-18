
	<!--Section : Featured Block-->
	<?php $color = get_sub_field('background_color'); ?>
	<section class="uk-block featured-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?> id="featured-block">
		<div class="uk-container uk-container-center">
			<div class="spacer-v-2"></div>
			<div class="uk-h1 uk-text-uppercase uk-text-center"><?php the_sub_field('title'); ?></div>
			<div class="spacer-v-9"></div>
			<div class="uk-width-medium-9-10 uk-container-center">
				<div class="uk-grid uk-margin-large-bottom" data-uk-margin="{cls:'uk-margin-small-top'}">
					<?php if( have_rows('content') ):?>
						<?php while ( have_rows('content') ) : the_row();?>
						<div class="uk-width-medium-1-2">
						<div class="tm-grid-content">
							<div class="spacer-v-1"></div>
							<h6><?php the_sub_field('title');?></h6>
							<div class="spacer-v-1"></div>
							<p>
								<?php the_sub_field('content');?>
							</p>
							<img src="<?php the_sub_field('icon');?>">
						</div>
					</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!--End-->
