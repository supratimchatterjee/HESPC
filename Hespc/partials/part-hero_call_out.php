
<!--Section : Hero Callout-->
<section class="uk-block tm-block-large hero-callout" style="background: url('<?php echo get_sub_field('background_image');?>') no-repeat 0 0/ cover;">
	<div class="uk-position-relative">
		<div class="uk-container uk-container-center uk-text-center">
			<div class="spacer-v-8"></div>
			<h3><?php the_sub_field('title');?></h3>
			<div class="uk-width-large-4-10 uk-container-center">
				<div class="spacer-v-1"></div>
				<p>
					<?php the_sub_field('content');?>
				</p>
				<?php if(get_sub_field('button_link')):?>
				<div class="spacer-v-2"></div>
				<a  href="<?php the_sub_field('button_link');?> " class="uk-button-secondary"><?php the_sub_field('button_label');?></a>
				<div class="spacer-v-8"></div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<!--End-->
