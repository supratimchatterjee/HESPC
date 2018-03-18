
<!--Section : Testimonial Block-->
<?php $color = get_sub_field('background_color'); ?>
<section class="testimonial-block tm-block-large" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center uk-text-center">
		<div class="uk-h1 uk-text-uppercase"><?php the_sub_field('title');?></div>
		<!--Testimonial Slider-->
		<div class="spacer-v-8"></div>
		<div class="uk-width-medium-7-10 uk-container-center" data-uk-slideset="{default: 1, autoplay: true}">
			<div class="uk-slidenav-position">
				<ul class="uk-grid uk-grid-collapse uk-slideset">
					<?php if( have_rows('testimonial') ): ?>
						<?php while( have_rows('testimonial') ): the_row(); ?>
						<li>
							<p>
							<?php the_sub_field('content');?>
							</p>
							<div class="spacer-v-10"></div>
							<h4 class="uk-text-uppercase"><?php the_sub_field('position');?></h4>
						</li>
						<?php endwhile; ?>
                    <?php endif; ?>
				</ul>
			</div>
			<ul class="uk-slideset-nav uk-dotnav uk-flex-center">
				<?php if( have_rows('testimonial') ): $count = 0; ?>
					<?php while( have_rows('testimonial') ): the_row(); ?>
					<li data-uk-slideset-item="<?php echo $count; ?>" class="uk-active"><a></a></li>
					<?php $count++;?>
					<?php endwhile; ?>
				<?php endif; ?>

			</ul>
		</div>
		<!--End-->
	</div>
</section>
<!--End-->
