
<!--Section : Numbered Block-->
<?php $color = get_sub_field('background_color'); ?>
<section class="numbered-block uk-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="spacer-v-2"></div>
		<div class="uk-h1 uk-text-uppercase uk-text-center"><?php the_sub_field('title');?></div>
		<div class="spacer-v-8"></div>
		<h6 class="uk-text-center"><?php the_sub_field('sub_title');?></h6>
		<div class="spacer-v-5"></div>
		<div class="uk-grid" data-uk-margin="{cls: 'uk-margin-top'}" data-uk-grid-match="{target:'.uk-panel-box'}">
			<?php if( have_rows('numbered_block') ): $count = 1; ?>
            	<?php while( have_rows('numbered_block') ): the_row(); ?>
			<div class="uk-width-medium-1-3">
				<div class="uk-panel uk-panel-box">
					<h3>0<?php echo $count;?>.</h3>
					<div class="spacer-v-1"></div>
					<h4><?php the_sub_field('title');?></h4>
					<p>
						<?php the_sub_field('content');?>
					</p>
					<div class="spacer-v-4"></div>
					<a href="<?php the_sub_field('link');?>" class="uk-position-cover"></a>
				</div>
			</div>
					<?php $count++;?>
				<?php endwhile;?>
			<?php endif; ?>
		</div>
		<div class="spacer-v-2"></div>
	</div>
</section>
<!--End-->
