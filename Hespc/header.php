<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package jeffhelp_payspi

 */



?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">



	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,700|Ubuntu:300,400,400i,500,700" rel="stylesheet">

	<?php wp_head(); ?>

	
<style>
.uk-panel.widget h5, .blog .blog-item .panel-top .ribbon,  .wp-pagenavi span.current{
background-color:#1f5fa9!important;
}

.blog .blog-item .panel-content .read-more a, .blog .blog-item .panel-content .social-share > *{
color:#1f5fa9;
}

.blog .blog-item .panel-top .uk-grid .uk-overlay-background {
    background: rgba(24, 106, 202, 0.67);
}

.blog .blog-item .panel-content .social-share a {
    background-color: #fff;
    color: #205fa8;
    border: 2px solid #205fa8;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    display: inline-block;
    text-align: center;
    line-height: 28px;
    margin-left: 12px;
}

.uk-panel.widget {
    border-bottom: 2px solid #205fa8;
}

.blog .blog-item {
    border-left: 2px solid #205fa8;
}
p, li{
font-size:17px;
line-height:1.5;
}
</style>
</head>

<body <?php body_class(); ?>>

	<!--Header-->

	<header data-uk-sticky>

		<div class="tm-utility-bar uk-hidden-small">

			<div class="uk-container uk-container-center">

			 <nav class="uk-navbar">

				<strong>
					In Crisis? Call <a href="tel:<?php the_field('phone_number','option');?>">&nbsp;<i class="uk-icon-phone"></i>&nbsp; <?php the_field('phone_number','option');?></a>
					or Text “Hello” to <a href="<?php the_field('text_number','option'); ?>"><?php the_field('text_number','option'); ?></a>
				</strong>



				<div class="uk-navbar-flip">



					<ul class="header-social uk-navbar-nav">

						<li><?php get_search_form();?></li>

						<?php if(get_field('facebook_link','option')): ?>

						<li><a href="<?php the_field('facebook_link','option');?>"><i class="uk-icon-facebook"></i></a></li>

						<?php endif; ?>

						<?php if(get_field('twitter_link','option')): ?>

						<li><a href="<?php the_field('twitter_link','option');?>"><i class="uk-icon-twitter"></i></a></li>

						<?php endif; ?>

						<?php if(get_field('instagram_link','option')): ?>

						<li><a href="<?php the_field('instagram_link','option');?>"><i class="uk-icon-instagram"></i></a></li>

						<?php endif; ?>

					</ul>



				</div>

			 </nav>

			</div>

		</div>

		<div class="tm-main-nav">

			<div class="uk-container uk-container-center">

				<nav class="uk-navbar">

					 <a href="<?php echo home_url( '/' ); ?>" class="uk-navbar-brand">

						<img class="uk-hidden-small" src="<?php the_field('logo_header','option');?>">

						<img class="uk-visible-small" src="<?php the_field('mobile_logo','option');?>">

					 </a>

					<div class="uk-navbar-flip">

						 <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'uk-navbar-nav uk-hidden-small', 'container' => false, 'walker'  => new Walker_UIKIT() ) ); ?>

						<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>

					</div>

				</nav>

			</div>

		</div>



		<!--Offcanvas-->

			<div id="offcanvas" class="uk-offcanvas">

				<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

					<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'menu_class' => 'uk-nav uk-nav-offcanvas', 'container' => false ) ); ?>



					<div class="tm-header-social uk-text-center">

						<a target="_blank" href="<?php echo $f_link; ?>"> <i class="uk-icon-facebook"></i> </a>

						<a target="_blank" href="<?php echo $t_link; ?>"> <i class="uk-icon-twitter"></i> </a>

						<a target="_blank" href="<?php echo $l_link; ?>"> <i class="uk-icon-instagram"></i> </a>

					</div>

				</div>

			</div>

		<!--End-->

	</header>

	<!--End-->



	<div class="mob-sticker uk-visible-small">

		<div class="uk-container uk-container-center uk-text-center">

			<strong>In Crisis? Call  <a href="tel:<?php the_field('phone_number','option');?>">&nbsp;<i class="uk-icon-phone"></i>&nbsp; <?php the_field('phone_number','option');?></a></strong>

		</div>

	</div>
