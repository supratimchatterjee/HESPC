	<!-- resources-icons-block Starts -->
		<div class="uk-block all-resources uk-position-relative" style="background: url('<?php echo get_sub_field('background');?>') no-repeat 0 0/ cover;">
		   <div class="uk-position-relative">
			  <div class="uk-container uk-container-center uk-text-center">
				  <h2 class="uk-text-uppercase"><strong><?php the_sub_field('title'); ?></strong></h2>

				  <div class="spacer-v-2"></div>
				  <div class="uk-grid" data-uk-margin>
					  <?php if( have_rows('resources_icons') ): ?>
					  <?php while( have_rows('resources_icons') ): the_row(); ?>
					  <div class="uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-3 uk-width-large-1-3 uk-flex uk-flex-center uk-flex-middle">
						  <div class="uk-position-relative content-holder" >
							<img class="uk-margin-small-bottom" src="<?php the_sub_field('icon');?>">
							<h6 class="uk-text-uppercase uk-margin-bottom-remove"><?php the_sub_field('title');?></h6>
							<a href="<?php the_sub_field('link');?>" class="uk-position-cover"></a>
						  </div>
					  </div>
						  <?php endwhile; ?>
					  <?php endif; ?>
				  </div>
			  </div>
		   </div>
	 	</div>
	<!--End-->
