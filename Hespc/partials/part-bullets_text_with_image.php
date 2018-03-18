<!--Section : Bullet Text-->
<?php $color = get_sub_field('background_color'); ?>
<section class="tm-block-large bullet-text-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="uk-grid" data-uk-margin="{cls:'uk-margin-large-top'}">
			<div class="uk-width-medium-1-3">
				<?php the_sub_field('first_block_content');?>
			</div>
			<div class="uk-width-medium-1-3 uk-push-1-3">
				<?php the_sub_field('image');?>
			</div>
			<div class="uk-width-medium-1-3 uk-pull-1-3">
				<?php the_sub_field('second_block_content');?>
			</div>
		</div>
	</div>
</section>
<!--End-->
