
<!--Section : One Column Text With Image-->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block one-column-text-with-image-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="spacer-v-2"></div>
		<div class="uk-width-medium-1-1 uk-container-center">
			<h3><?php the_sub_field('title');?></h3>
			<div class="spacer-v-2"></div>
			<div class="uk-grid uk-grid-divider" data-uk-margin="{cls: 'uk-margin-top'}">
				<div class="uk-width-medium-7-10">
				<?php the_sub_field('content');?>
				</div>
				<div class="uk-width-medium-3-10 uk-text-center">
					<img src="<?php the_sub_field('image');?>">
				</div>
			</div>
		</div>
		<div class="spacer-v-2"></div>
	</div>
</section>
<!--End-->
