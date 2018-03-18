<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jeffhelp_payspi
 */
get_header(); ?>

<div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
	<ul class="uk-slideshow uk-slideshow-fullscreen">
		<li>
			<img src="<?php the_field('banner_image','option');?>">
			<div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				<div class="uk-text-center">
					<h1><?php esc_html_e( '404 Not Found', 'jeffhelp_payspi' ); ?></h1>
					<p><b><?php esc_html_e( 'Oops! That page can&rsquo;t be found. It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'jeffhelp_payspi' ); ?></b></p>
					<p><?php get_search_form();?></p>
				</div>

			</div>
		</li>
	</ul>
</div>



<?php
get_footer();
