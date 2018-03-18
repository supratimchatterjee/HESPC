
<!--Section : Donate Callout-->
<section class="uk-block donate-callout" style="background: url('<?php the_sub_field('background_image');?>') no-repeat 0 0/ cover;">
	<div class="uk-position-relative">
		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-flex-middle" data-uk-margin="{cls:'uk-margin-large-top'}">
				<div class="uk-width-medium-7-10">
					<div class="uk-h1 uk-text-uppercase"><?php the_sub_field('title');?></div>
					<div class="spacer-v-2"></div>
					<h5><?php the_sub_field('sub_title');?></h5>
				</div>
				<div class="uk-width-medium-3-10 uk-text-center">
					<?php if(get_sub_field('button_link')):?>
					<a href="<?php the_sub_field('button_link');?>" class="uk-button-secondary uk-text-capitalize"><?php the_sub_field('button_label');?></a>
					<?php endif;  ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End-->
