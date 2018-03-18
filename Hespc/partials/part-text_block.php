
<!--Two Column-->
<?php $image = get_sub_field('image_alignment');?>
<?php if ($image == 'Right Alignment'): ?>
	<?php $class = 'no-repeat 100% 0/ contain'; ?>
	<?php else: ?>
	<?php $class = 'no-repeat 0 0/ contain';?>
<?php endif;?>
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block uk-padding-remove text-block-with-image" style="background:url('<?php the_sub_field('image'); ?>') <?php echo $class; ?><?php if($color):?>,rgb(244,244,247)<?php endif;?>;">
	<div class="uk-container uk-container-center">
		<!--Content area-->
		<div class="uk-grid" data-uk-margin>
			<?php $column = get_sub_field('content_column');?>
			<?php if ($column == '2-3 Column'): ?>
				<?php $class = 'uk-width-medium-2-3'; ?>
				<?php elseif($column == '1-3 Column'): ?>
				<?php $class = 'uk-width-medium-1-3';?>
				<?php elseif($column == '1-1 Column'): ?>
				<?php $class = 'uk-width-medium-1-2';?>
				<?php elseif($column == '1-2 Column'): ?>
				<?php $class = 'uk-width-medium-1-2';?>
			<?php endif;?>

			<?php $content = get_sub_field('image_alignment');?>
			<?php if ($content == 'Left Alignment'): ?>
				<?php $class_two = 'uk-push-1-2'; ?>
				<?php else: ?>
				<?php $class_two = '';?>
			<?php endif;?>

			<div class="<?php echo $class; ?> <?php echo $class_two; ?> tm-magic-container" 
			style="background:<?php if($color):?>rgb(244,244,247)<?php else:?> #fff<?php endif;?>; ">
				<?php $above = get_sub_field('sub_title_position');?>
				<?php if($above = 'Above Title'): ?>
				<h3 class="uk-text"><?php the_sub_field('sub_title_above'); ?></h3>
				<div class="spacer-v-1"></div>
				<?php endif;?>
				<h1 class="uk-text-uppercase"><?php the_sub_field('title'); ?></h1>
				<div class="spacer-v-1"></div>
				<?php $below = get_sub_field('sub_title_position');?>
				<?php if ($below == 'Below Title'): ?>
				<h3 class="uk-text"><?php the_sub_field('sub_title_below'); ?></h3>
				<?php endif;?>

				<div class="spacer-v-3"></div>
					<?php $column = get_sub_field('content_column');?>
					<?php if ($column == '2-3 Column'): ?>
						<?php $class = 'uk-column-medium-1-2'; ?>
						<?php else: ?>
						<?php $class = 'uk-column-medium-1-1';?>
					<?php endif;?>
				<div class="<?php echo $class;?>">
					<?php the_sub_field('content'); ?>
					<?php $link = get_sub_field('button_link');?>
					<?php if($link):?>
					<div class="spacer-v-5"></div>
					<a href="<?php echo $link; ?>"class="uk-button"><?php the_sub_field('button_label');?></a>
					<?php endif; ?>
				</div>
				<div class="uk-margin-top uk-visible-small">
					<img class="uk-width-1-1" src="<?php the_sub_field('image'); ?>">
				</div>
			</div>
		</div>
		<!--End-->
	</div>
</section>
<!--End-->
