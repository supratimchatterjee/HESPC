
<!--Section : Upcoming Event-->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<h2 class="uk-text-uppercase uk-h1"><strong><?php the_sub_field('title');?></strong></h2>
		<div class="spacer-v-4"></div>
		<div class="uk-width-medium-8-10 uk-container-center">
			<?php $code = get_sub_field('short_code');?>
			<?php echo do_shortcode($code); ?>
		</div>
	</div>
</section>
<!--End-->
