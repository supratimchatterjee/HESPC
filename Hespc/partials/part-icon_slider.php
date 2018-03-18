<!--Section : Icon Slider-->
<?php $color = get_sub_field('background_color'); ?>
<section class="icon-slider" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="uk-width-medium-8-10 uk-container-center" data-uk-slideset="{small: 2, medium: 3, large: 5, autoplay: true}">
			<div class="uk-slidenav-position">
				<ul class="uk-grid uk-slideset uk-flex-middle">
					<?php $images = get_sub_field('slider'); ?>
					<?php foreach ($images as $image ):?>
					<?php
					  $sf_image = $image['ID'];
					  $sf_image  = wp_get_attachment_image_src( $sf_image,'full');
					  $sf_image = $sf_image[0];
					 ?>
					<?php $id = $image['ID'];?>
					<li><a href="<?php the_field('link',$id);?>"><img src="<?php echo $sf_image; ?>"></a></li>
					<?php endforeach; ?>

				</ul>
				<a  class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
				<a class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
			</div>
		</div>
	</div>
</section>
<!--End-->
