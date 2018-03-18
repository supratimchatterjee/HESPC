
<!--Section : Contact Us-->
<?php $color = get_sub_field('background_color'); ?>
<section class="uk-block contact-us-block" <?php if($color):?>style="background-color:rgb(244,244,247)" <?php endif;?>>
	<div class="uk-container uk-container-center">
		<div class="spacer-v-1"></div>
		<div class="uk-h1 uk-text-uppercase uk-text-center">
			<?php the_sub_field('title');?>
		</div>
		<div class="spacer-v-10"></div>
		<div class="uk-grid uk-grid-large" data-uk-margin="{cls:'uk-margin-large-top'}">
			<div class="uk-width-medium-6-10">
				<div class="contact-info">
					<div class="panel-header">
						<p>
						<?php the_sub_field('content');?>
						</p>
					</div>
					<div class="panel-body">
						<h5><?php the_sub_field('address_heading');?></h5>
						<div class="spacer-v-2"></div>
						<div class="uk-grid" data-uk-margin="{cls:'uk-margin-large-top'}">
							<div class="uk-width-large-6-10">
								<p>
								<?php the_sub_field('address');?>
								</p>
							</div>
							<div class="uk-width-large-4-10">
								<?php if(get_sub_field('button_link')):?>
								<a  href="<?php the_sub_field('button_link');?>" class="uk-button uk-text-uppercase"><?php the_sub_field('button_text');?></a>
								<?php endif;?>
							</div>
						</div>
						<div class="uk-width-large-4-10">
							<div class="spacer-v-2"></div>
							<ul class="contact-social uk-navbar-nav">
								<?php if(get_sub_field('facebook_link')):?>
								<li><a class="smGlobalBtn" href="<?php the_sub_field('facebook_link');?>"><i class="uk-icon-facebook"></i></a></li>
								<?php endif;?>
								<?php if(get_sub_field('twitter_link')):?>
								<li><a class="smGlobalBtn" href="<?php the_sub_field('twitter_link');?>"><i class="uk-icon-twitter"></i></a></li>
								<?php endif;?>
								<?php if(get_sub_field('linkedin_link')):?>
								<li><a class="smGlobalBtn" href="<?php the_sub_field('linkedin_link');?>"><i class="uk-icon-linkedin"></i></a></li>
								<?php endif;?>
							</ul>

						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-4-10">
				<div class="give-feedback">
					<p><?php the_sub_field('contact_form');?></p>
					<?php $code = get_sub_field('short_code');?>
					<?php echo do_shortcode($code); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End-->
