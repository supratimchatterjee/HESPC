
<!--Section : Videos-->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block three-column-video-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="uk-h1 uk-text-uppercase uk-text-center">
			<?php the_sub_field('title');?>
		</div>
		<div class="spacer-v-6"></div>
		<div class="uk-grid" data-uk-margin="{cls: 'uk-margin-large-top'}">
			<?php if( have_rows('our_videos') ): ?>
				<?php while( have_rows('our_videos') ): the_row(); ?>
				<div class="uk-width-medium-1-3">
				<div class="content">
					<div class="video-container">
						<div class="embed-container">
						<?php the_sub_field('video');?>
						</div>
					</div>
					<div class="text-container">
						<h5><?php the_sub_field('title');?></h5>
						
						<?php the_sub_field('content');?>
						
						<a class="uk-button" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_label'); ?></a>
					</div>
				</div>
			</div>
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>
<!--End-->
