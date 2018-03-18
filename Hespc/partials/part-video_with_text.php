<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block video-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="video-section">
			<div class="embed-container">
			<?php the_sub_field('video_url'); ?>
			</div>
		</div>
		<div class="content-section">
			<h3><?php the_sub_field('title');?></h3>
			<div class="spacer-v-1"></div>
			<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
				<div class="uk-width-medium-7-10">
					<div class="uk-column-medium-1-2">
						<?php the_sub_field('content')?>
					</div>
				</div>
				<?php/*
				<div class="uk-width-medium-3-10 uk-text-right">
					<div>
						<div class="share-option">
							<span class="uk-h5">Share</span>
							<a href="#"><i class="uk-icon-facebook"></i></a>
							<a href="#"><i class="uk-icon-twitter"></i></a>
							<a href="#"><i class="uk-icon-linkedin"></i></a>
						</div>
					</div>
				</div>
				*/?>
			</div>
		</div>
	</div>
</section>
