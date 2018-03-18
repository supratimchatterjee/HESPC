
<!--Section : Small Hero Callout-->
<section class="uk-block small-hero-callout" style="background: url('<?php the_sub_field('background_image');?>') no-repeat 0 0/ cover;">
	<div class="uk-position-relative">
		<div class="uk-container uk-container-center uk-text-center">
			<h3 class="uk-h1 uk-text-uppercase"><?php the_sub_field('title');?></h3>
			<div class="spacer-v-2"></div>
			<?php if(get_sub_field('button_link')):?>
			<a href="<?php the_sub_field('button_link');?>" class="uk-button-secondary uk-text-capitalize"><?php the_sub_field('button_label');?></a>
			<?php endif;?>
		</div>
	</div>
</section>
<!--End-->
