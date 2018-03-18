<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jeffhelp_payspi
 */

?>
<footer class="site-footer">
	<div class="footer-top uk-block">
		<div class="uk-container uk-container-center">
			<div class="uk-clearfix">
				<div class="uk-float-left tm-one">
					<div class="footer-logo" style="width:90px;">
						<a href="<?php echo home_url( '/' ); ?>">
							<img src="<?php the_field('logo_footer','option')?>" alt="footer_logo" />
						</a>
					</div>
					<p>
					<?php the_field('description','option');?>
					</p>
				</div>
				<div class="uk-float-left tm-two">
					<h5>QUICK LINKS</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'primary-menu', 'menu_class' => 'uk-list uk-margin-top uk-text-uppercase uk-text-bold', 'container' => false ) ); ?>
				</div>
				<div class="uk-float-left tm-three">
					<h5>Upcoming Events</h5>
					<div class="">
					<?php if( have_rows('upcoming_events','option') ): ?>
					  	<?php while( have_rows('upcoming_events','option') ): the_row(); ?>
						<div class="tm-poster uk-position-relative">
							<div>
								<span class="month"><?php the_sub_field('month'); ?></span>
								<span class="date"><?php the_sub_field('date'); ?> </span>
							</div>
							<div><?php the_sub_field('content'); ?></div>
							<a class="uk-position-cover" href="<?php the_sub_field('event_link'); ?>"></a>
						</div>
						<?php endwhile; ?>
				   <?php endif; ?>
					</div>
				</div>
				<div class="uk-float-left tm-four">
					<h5 class="uk-text-uppercase">Contact Us</h5>
					<ul class="uk-list uk-margin-top">
						<li class="tm-phone">
							<strong class="uk-text-uppercase">Phone</strong><span class="uk-display-block"><a href="<?php the_field('phone_Footer','option'); ?>"><?php the_field('phone_Footer','option'); ?></a></span>
						</li>
						<li class="tm-mail">
							<strong class="uk-text-uppercase">Email</strong><span class="uk-display-block"><a href="mailto:<?php the_field('email','option');?>"><?php the_field('email','option');?></a></span>
						</li>
						<li class="tm-location">
							<strong class="uk-text-uppercase">ADDRESS</strong><span class="uk-display-block"><?php the_field('address','option'); ?></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="uk-container uk-container-center">
			<div class="uk-grid" datak-uk-margin>
				<div class="uk-width-medium-3-10 uk-push-7-10 footer-social">
					<span class="uk-h5">CONNECT WITH US</span>
					<?php if(get_field('facebook_link','option')): ?>
					<a href="<?php the_field('facebook_link','option');?>"><i class="uk-icon-facebook"></i></a>
					<?php endif; ?>
					<?php if(get_field('twitter_link','option')): ?>
					<a href="<?php the_field('twitter_link','option');?>"><i class="uk-icon-twitter"></i></a>
					<?php endif; ?>
					<?php if(get_field('instagram_link','option')): ?>
					<a href="<?php the_field('instagram_link','option');?>"><i class="uk-icon-instagram"></i></a>
					<?php endif;?>
				</div>
				<div class="uk-width-medium-7-10 uk-pull-3-10 copyright">
					<p>HESPC theme by<a class="ftr" href="brandrevive.com"><span> brandrevive.com</span></a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-598c0821cb04379a"></script>

</body>
