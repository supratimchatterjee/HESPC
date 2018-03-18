
<!--Section : 2 column_video_with_text -->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block two-column-video-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}" data-uk-grid-match>
			<div class="uk-width-medium-7-10 uk-flex uk-flex-middle">
				<div class="uk-width-1-1">
					<div class="embed-container">
					<?php the_sub_field('video_url_two'); ?>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-3-10 uk-flex uk-flex-middle">
				<div class="content-section">
					<h3><?php the_sub_field('title'); ?></h3>
					<div class="spacer-v-1"></div>
					<?php the_sub_field('content'); ?>
					<?php/*
					<div class="share-option">
						<span class="uk-h5">Share</span>
						<a href="#"><i class="uk-icon-facebook"></i></a>
						<a href="#"><i class="uk-icon-twitter"></i></a>
						<a href="#"><i class="uk-icon-linkedin"></i></a>
					</div>
						*/?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End-->
