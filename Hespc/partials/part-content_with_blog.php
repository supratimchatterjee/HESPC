<div class="uk-block blog-content">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2">
				<div class="left-content">
					<?php the_sub_field('content_twb') ; ?>
				</div>
			</div>
			<div class="uk-width-medium-1-2">
				<div class="section-header">
					<h3 class="uk-contrast">HESPC Blog</h3>
				</div>
				<div class="item-list">
				<?php
					$args = array(
					'post_type'         =>        'post',
					'posts_per_page'    =>        3

					);

					$query = new WP_Query($args);
					if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
					$id    =    $query->ID;
				?>
					<div>
						<div>
							<?php the_post_thumbnail('thumbnail', array('class' => 'uk-align-left'));?>
							<h5><?php the_title(); ?></h5>
							<p><?php echo wp_trim_words( get_the_content(), 27, '...' );?></p>
						</div>
						<div class="uk-clearfix uk-margin-top">
							<a class="uk-button uk-float-right" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
				<?php endwhile;?>
				<?php endif; wp_reset_query(); ?>
				</div>
				<div class="section-footer">
					<a href="<?php the_sub_field('blue_button_link'); ?>" class="uk-width-1-1 uk-text-center uk-button"><?php the_sub_field('blue_button_label'); ?></a>
					<a href="<?php the_sub_field('grey_button_link'); ?>" class="uk-width-1-1 uk-text-center uk-button"><?php the_sub_field('grey_button_label'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
