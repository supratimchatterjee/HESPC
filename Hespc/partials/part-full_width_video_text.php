<section class="uk-block full-width-video-block uk-padding-top-remove">
	<div class="uk-overlay uk-width-1-1">
		<div class="video-section uk-position-relative">
			<?php $video = get_sub_field('video_url', false, false);?>
			<div class="embed-container">
			<?php the_sub_field('video_url'); ?>
			</div>

		</div>
		<div class="uk-overlay-panel uk-flex uk-flex-middle">
			<div class="overlay-content offset-caption">
				<a href="#" class="uk-h3"><?php the_sub_field('button_label') ?></a>
				<div class="spacer-v-1"></div>
				<div class="uk-h1">
					<?php the_sub_field('video_title') ?>
				</div>
				<p>
					<?php the_sub_field('video_content') ?>
				</p>
			</div>
			<a class="uk-position-cover" href="<?php echo $video; ?>" data-uk-lightbox="iframe"></a>
		</div>
	</div>
	<div class="uk-container uk-container-center">
		<div class="content-section">
			<h3><?php the_sub_field('title') ?></h3>
			<div class="spacer-v-1"></div>
			<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
				<div class="uk-width-medium-7-10">
					<div class="uk-column-medium-1-2">
						<p>
							<?php the_sub_field('content') ?>
						</p>
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
