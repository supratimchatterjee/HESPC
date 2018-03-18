	<!-- Resources-block Starts -->
	<div class="resources" style="background: url('<?php the_sub_field('background_image'); ?>') repeat scroll 0 0;">
	  	<div class="uk-container uk-container-center uk-text-center">
		  	<h1 class="uk-text-uppercase"><?php the_sub_field('title');?></h1>
		  	<div class="uk-width-large-6-10 uk-container-center uk-margin-large-bottom">
			  <p>
				  <?php the_sub_field('description');?>
			  </p>
		  	</div>
		  	<div class="uk-grid resource-category" data-uk-margin="{cls:'single-resource-category-margin'}">
					<?php $column = get_sub_field('check_to_show_column'); ?>
					<?php if($column): ?>
						<?php $count_col = 'uk-width-large-1-4' ?>
					<?php else: ?>
						<?php $count_col = 'uk-width-large-1-3' ?>
					<?php endif; ?>
			  <?php if( have_rows('resources') ): ?>
				  <?php while( have_rows('resources') ): the_row(); ?>
				  	<?php $check = get_sub_field('check_to_show_overlay'); ?>
				  	<div class="uk-width-medium-1-2 <?php echo $count_col; ?>">
					  	<figure class="uk-overlay">
						  <img src="<?php the_sub_field('image');?>" alt="">
						  <figcaption class="uk-overlay-panel resource-category-overlay <?php if($check):?>training-category-overlay<?php endif;?> uk-flex uk-flex-center uk-flex-middle">
							  <div>
								  <img src="<?php the_sub_field('icon');?>">
								  <h5 class="uk-text-uppercase"><?php the_sub_field('title');?></h5>
							  </div>
						  </figcaption>
						  <a href="<?php the_sub_field('link');?>" class="uk-position-cover"></a>
					  	</figure>
				  	</div>
				  <?php endwhile; ?>
			  <?php endif; ?>

		  	</div>
	  	</div>
	</div>

	<!--  Ends -->
