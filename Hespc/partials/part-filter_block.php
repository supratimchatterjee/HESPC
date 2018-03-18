	<!-- filter-block Starts -->
	<?php $type = get_sub_field('type');?>
	<?php if($type == 'Resources'): ?>
		<?php $class = 'resource-interior' ?>
	<?php else: ?>
		<?php $class = 'resource-interior training-interior' ?>
	<?php endif;?>
	<div class="<?php echo $class; ?>" style="background: url('<?php the_sub_field('background_image'); ?>') repeat scroll 0 0;">
	  	<div class="uk-container uk-container-center">
		  	<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
			  	<div class="uk-width-medium-1-4">
				  	<div class="filter-area uk-hidden-small" data-uk-sticky="{boundary: true}">
					  	<div class="tm-panel-teaser">
						  	<div class="uk-overlay">
							  <img src="<?php the_sub_field('left_image');?>">
							  <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle">
								  <div>
									  <img src="<?php the_sub_field('left_icon');?>">
								  </div>
							  </div>
						  </div>
					  	</div>
					  <!--Filter Block-->
					  <?php $type = get_sub_field('type');?>
					  <?php if($type == Resources): ?>
						  <?php $class = 'uk-text-right' ?>
						  <?php else: ?>
						  <?php $class = 'uk-text-left' ?>
					  <?php endif;?>

					  <ul id="tm-filters" class="uk-list uk-text-left uk-text-center-small tm-filters">
						  <li data-uk-filter=""><a href="">All</a></li>
						  <?php if( have_rows('segment') ): ?>
							  <?php $i = 1;?>
							  <?php while( have_rows('segment') ): the_row(); ?>
						  <li data-uk-filter="filter-<?php echo $i;?>"><a href=""><?php the_sub_field('title'); ?></a></li>
							  <?php $i++; ?>
							  <?php endwhile; ?>
						  <?php endif; ?>
					  </ul>
					  <!--End-->
				  </div>
			  </div>
			  <div class="uk-width-medium-3-4">
				  <h1 id="filter-title-start" class="uk-text-uppercase"><strong><?php the_sub_field('title');?></strong></h1>
				  <p>
					  <?php the_sub_field('description');?>
				  </p>

				  <!--Mobile Filter-->
				  <div id="justify" class="mobile-filter uk-visible-small" data-uk-sticky="{boundary: true, top:120}">
					  <div class="uk-button-dropdown uk-width-1-1" data-uk-dropdown="{justify:'#justify', mode:'click'}" aria-haspopup="true" aria-expanded="false">
						  <button id="placeholder" class="uk-width-1-1 filter-dropdown">All</button>
						  <div class="uk-dropdown uk-dropdown-bottom" aria-hidden="true" style="top: 30px; left: 0px; min-width: 823px; margin-left: 0px;" tabindex="">
							  <ul id="tm-filters1" class="uk-list uk-text-right uk-text-center-small">
								  <li data-value="all" data-uk-filter=""><a>All</a></li>
								  <?php if( have_rows('segment') ): ?>
									  <?php $i = 1;?>
									  <?php while( have_rows('segment') ): the_row(); ?>
								  		<li data-value="<?php the_sub_field('title'); ?>" data-uk-filter="filter-<?php echo $i;?>"><a><?php the_sub_field('title'); ?></a></li>
									  <?php $i++; ?>
									  <?php endwhile; ?>
								  <?php endif; ?>
							  </ul>
						  </div>
					  </div>
				  </div>
				  <!--End-->

				  <div data-uk-grid="{controls: '#tm-filters, #tm-filters1'}">
					  <?php if( have_rows('segment') ): ?>
						  <?php $i = 1;?>
						  <?php $count = 1;?>
						  <?php while( have_rows('segment') ): the_row(); ?>
					  <div class="tm-record" data-uk-filter="filter-<?php echo $i;?>">
						  <div class="uk-position-relative heading-holder">
							<?php $category = get_sub_field('title');?>
						  	<h2 class="uk-text-uppercase"><?php the_sub_field('title'); ?></h2>
						  </div>
						  <div class="spacer-v-3"></div>
						  <div class="uk-grid tm-report" data-uk-margin="{cls:'single-resource-category-margin'}" data-uk-grid-match="{target:'.tm-card'}">
						  <?php if( have_rows('block') ): ?>
								
							  <?php while( have_rows('block') ): the_row(); ?>
							  <div class="uk-width-medium-1-2 uk-width-large-1-3">
								  <div class="uk-panel uk-panel-box tm-card">
									  <h5><?php the_sub_field('title'); ?></h5>
											<?php $content = get_sub_field('content'); ?>
											<?php echo truncate($content,'250'); ?>

									  <div class="uk-position-absolute tm-more-option">
										  <div class="uk-clearfix">
											  <div class="uk-float-left">
											  	<?php $type = get_sub_field('check_to_show');?>
												<?php if($type): ?>
													<a href="#training-modal<?php echo $count;?>" class="uk-button" data-uk-modal="{center:true}"><?php the_sub_field('button_text'); ?></a>
													<?php else: ?>
													<a href="<?php the_sub_field('link'); ?>" target="_blank" class="uk-button"><?php the_sub_field('button_text'); ?></a>
												<?php endif;?>
											  </div>
											  <div class="uk-float-right tm-share">
												  <div class="addthis_inline_share_toolbox" data-title="sharing" data-url="<?php the_sub_field('link'); ?>">

												  </div>
											  </div>
										  </div>
										  <!--Modal-->
											<div id="training-modal<?php echo $count;?>" class="uk-modal">
												<div class="uk-modal-dialog">
													<a class="uk-modal-close uk-close"></a>
													<div class="modal-heading">
													<h6><?php echo $category;?></h6>
													<div class="spacer-v-2"></div>
													<h3><?php the_sub_field('title'); ?></h3>
													<div class="spacer-v-1"></div>
													</div>
													<?php echo $content; ?>
												</div>
											</div>
										  <!--End-->
									  </div>
								  </div>
							  </div>
								<?php $count++;?>
							  <?php endwhile; ?>
						  <?php endif; ?>
						  </div>
					  </div>
						  <?php $i++; ?>
						  <?php endwhile; ?>
					  <?php endif; ?>
				  </div>
				  <div class="spacer-v-2"></div>
			  </div>
		  </div>
	  </div>
	</div>
	<!--End-->
