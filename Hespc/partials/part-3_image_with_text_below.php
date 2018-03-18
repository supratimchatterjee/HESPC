
<!--Section : Image-->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block three-column-video-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="uk-h1 uk-text-uppercase uk-text-center">
			<?php the_sub_field('section_title');?>
		</div>
		<div class="spacer-v-6"></div>
		<div class="uk-grid" data-uk-margin="{cls: 'uk-margin-large-top'}">
			<?php if( have_rows('gallery_section') ): ?>
				<?php while( have_rows('gallery_section') ): the_row(); ?>
				<div class="uk-width-medium-1-3">
				<div class="content">
					<div class="video-container">
						<a href="<?php the_sub_field('image');?>" data-uk-lightbox>
						<img src="<?php the_sub_field('image');?>" />
						</a>
					</div>
					<div class="text-container">
						<h5><?php the_sub_field('title');?></h5>
						<p>
						<?php the_sub_field('content');?>
						</p>
					</div>
				</div>
			</div>
				<?php endwhile;?>
			<?php endif;?>

		</div>
	</div>
</section>
<!--End-->
