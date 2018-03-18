<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();
$full_region = tribe_get_full_region( $venue_id );
$style = apply_filters( 'tribe_events_embedded_map_style', "height: $height; width: $width", $index );
?>
	<!--Main content-->
	<div class="event-content">
		<div class="">
			<h1 class="uk-text-center">Events</h1>
			<div class="uk-text-center">
				<div class="tm-breadcrumb-container">
					<ul>
						<li>
							<a href="<?php echo home_url('/');?>">Home</a>
						</li>
						<li>
							<span class="separator">></span>
							<a href="<?php echo home_url('/');?>events/">Event</a>
						</li>
						<li>
							<span class="separator">></span>
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="uk-grid uk-margin-large-top" data-uk-margin="{cls:'uk-margin-large-top'}">
				<div class="uk-width-medium-4-10">
					<div class="left-section">
						<div class="tm-ticket uk-clearfix">
							<div class="tm-time uk-visible-large uk-float-left">
								<div class="month"><?php echo tribe_get_start_date($event_id, false, 'M'); ?></div>
								<div class="date"><?php echo tribe_get_start_date($event_id, false, 'd'); ?></div>
							</div>
							<div class="ticket-body">
								<div class="ticket-heading uk-clearfix">
									<div class="uk-float-left uk-hidden-large">
										<div class="month"><?php echo tribe_get_start_date($event_id, false, 'M'); ?></div>
										<div class="date"><?php echo tribe_get_start_date($event_id, false, 'd'); ?></div>
									</div>
									<div class="tm-title"><?php the_title(); ?></div>
								</div>
								<div class="tm-label uk-clearfix">
									<div class="uk-float-left">
										LOCATION:
									</div>
									<div class="uk-float-left">
										<strong>

											<?php
											// This location's street address.
											if ( tribe_get_address( $venue_id ) ) : ?>
											<span class="tribe-street-address"><?php echo tribe_get_address( $venue_id ); ?></span>
												<?php if ( ! tribe_is_venue() ) : ?>
													<br>
												<?php endif; ?>
											<?php endif; ?>

											<?php
											// This locations's city.
											if ( tribe_get_city( $venue_id ) ) :
												if ( tribe_get_address( $venue_id ) ) : ?>
												<?php endif; ?>
												<span class="tribe-locality"><?php echo tribe_get_city( $venue_id ); ?></span><span class="tribe-delimiter">,</span>
											<?php endif; ?>

											<?php
											// This location's abbreviated region. Full region name in the element title.
											if ( tribe_get_region( $venue_id ) ) : ?>
												<abbr class="tribe-region tribe-events-abbr" title="<?php esc_attr_e( $full_region ); ?>"><?php echo tribe_get_region( $venue_id ); ?></abbr>
											<?php endif; ?>

											<?php
											// This location's postal code.
											if ( tribe_get_zip( $venue_id ) ) : ?>
												<span class="tribe-postal-code"><?php echo tribe_get_zip( $venue_id ); ?></span>
											<?php endif; ?>

											<?php
											// This location's country.
											if ( tribe_get_country( $venue_id ) ) : ?>
												<span class="tribe-country-name"><?php echo tribe_get_country( $venue_id ); ?></span>
											<?php endif; ?>


										</strong>
									</div>
								</div>
								<?php $id = $post->ID; ?>
								<div class="tm-label">
									TIME: <strong><?php echo tribe_get_start_date($event_id, true, 'g:i A'); ?></strong>
								</div>
								<?php if(get_field('start_date')): ?>
								<div class="tm-label">Registration Date*: <strong><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></strong></div>
								<?php endif; ?>
								<?php if(tribe_events_has_tickets($id)): ?>
								<div class="tm-label">Price: <strong><?php echo tribe_get_cost( null, true ) ?></strong></div>
								<?php endif; ?>
								<div class="spacer-v-2"></div>
								<div class="uk-clearfix">
									<div class="uk-float-right tm-share">
										<div class="addthis_inline_share_toolbox" data-title="sharing" data-url="<?php the_sub_field('link'); ?>"></div>
										<a class="icon" href="https://www.facebook.com/"><i class="uk-icon-facebook"></i></a>
										<a class="icon" href="https://www.twitter.com/"><i class="uk-icon-twitter"></i></a>
									</div>
								</div>
							</div>

						</div>
						<?php $id = $post->ID; ?>
						<?php if(tribe_events_has_tickets($id)): ?>
						<div class="ticket-reg-form">
							<!-- Event content -->
							<h3>registration form</h3>
							<h6>*Pre-registration is Required</h6>

							<div class="spacer-v-1"></div>
							<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="uk-width-medium-6-10">
					<div class="right-section">
						<div class="image-section">
							<!-- Event featured image, but exclude link -->
							<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
						</div>
						<div class="content-section">
							<h3 class="uk-text-uppercase">event details</h3>
							<div class="spacer-v-1"></div>
							<div class="tribe-events-single-event-description tribe-events-content">
								<?php the_content(); ?>
							</div>
							<!-- .tribe-events-single-event-description -->
							<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
							<ul>
								<?php if(get_field('third_module')):?>
								<li class="link">
								<?php the_field('third_module'); ?>
								</li>
								<?php endif; ?>
							</ul>
							<hr>
							<div class="spacer-v-1"></div>
							<ul>
								<?php if(get_field('first_module')): ?>
								<li class="sponsored">
								<?php the_field('first_module'); ?>
								</li>
								<?php endif; ?>
								<?php if(get_field('second_module')): ?>
								<li class="fee">
								<?php the_field('second_module'); ?>
								</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="tribe-events-gmap-<?php esc_attr_e( $index ) ?>" style="<?php esc_attr_e( $style ) ?>"></div><!-- #tribe-events-gmap-<?php esc_attr_e( $index ) ?> -->
	</div>
