
<?php $color = get_sub_field('background_color'); ?>
<!--Section : Two Column Text-->
<section class="uk-block two-column-text-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="spacer-v-2"></div>
		<div class="uk-width-medium-1-1 uk-container-center">
			<h3><i><?php the_sub_field('title');?></i></h3>
			<div class="spacer-v-2"></div>
			<div class="uk-column-medium-1-1">
				<?php the_sub_field('content');?>
			</div>
		</div>
		<div class="spacer-v-2"></div>
	</div>
</section>
<!--End-->
