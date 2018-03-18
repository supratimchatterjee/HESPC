<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Event
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jeffhelp_payspi
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();?>
		<!--Banner-->
		  <div class="site-banner">
		   <div class="uk-slidenav-position" data-uk-slideshow>
		       <ul class="uk-slideshow">
		           <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png"></li>
		       </ul>
		   </div>
		  </div>
		  <!--End-->

			<!--Main content-->
			<div class="event-content uk-block">
			   <div class="uk-container uk-container-center">
				    <h1 class="uk-text-center">Events</h1>
				    <div class="uk-text-center">
						<?php echo do_shortcode('[breadcrumb]'); ?>
					</div>
					<div class="uk-grid uk-margin-large-top" data-uk-margin="{cls:'uk-margin-large-top'}">
						<div class="uk-width-medium-4-10">
							<div class="left-section">
								<div class="tm-ticket uk-clearfix">
									<div class="tm-time uk-visible-large uk-float-left">
										<div class="month">aug</div>
										<div class="date">23</div>
									</div>
									<div class="ticket-body uk-float-right">
										<div class="ticket-heading">
											<div class="uk-display-inline-block uk-hidden-large">aug 23</div>
											<div class="uk-display-inline-block">ASIST TRAINING</div>
										</div>
										<div class="tm-label uk-clearfix">
											<div class="uk-float-left">
												LOCATION: 
											</div>
											<div class="uk-float-left">
												<strong>Giant Foods,<br>
												2300 Linglestown rd,<br>
												Harrisburg, PA 17110</strong>
											</div>
										</div>
										<div class="tm-label">
											TIME: <strong>10:00 am</strong>
										</div>
										<div class="tm-label">Registration Date*: <strong>6/26 - 8/20</strong></div>
										<div class="tm-label">Price: <strong>$100.00</strong></div>
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
							</div>
						</div>
						<div class="uk-width-medium-6-10">
							<div class="right-section">
								<div class="image-section">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/event_image.jpg" />
								</div>
								<div class="content-section">
									<h3 class="uk-text-uppercase">event details</h3>
									<p>Applied Suicide Intervention Skills Training (ASIST) is a 2-day suicide first aid interactive workshop for community caregivers. ASIST provides practical training for caregivers seeking to prevent the immediate risk of suicide.<br>
									Participants learn how to: recognize invitations for help, reach out and offer support, review the risk of suicide, apply the ASIST model of suicide intervention, and link people with community resources. Participants also have the opportunity to practice and implement the model in multiple role-play scenarios.</p>
									<div class="spacer-v-1"></div>
									<hr>
									<div class="spacer-v-1"></div>
									<ul>
										<li class="sponsored">
											<h6 class="uk-text-uppercase">Sponsored By</h6>
											<p>This workshop is sponsored by Prevent Suicide PA (aka PA Adult Older Adult Suicide Prevention Coalition)</p>
										</li>
										<li class="fee">
											<h6 class="uk-text-uppercase">REGISTRATION FEE</h6>
											<p>There is a $100 registration fee for this very valuable training (valued @ $300 per person).</p>
										</li>
										<li class="link">
											<h6 class="uk-text-uppercase">EVENT LINKS</h6>
											<p>
												CEU can be obtained online:<br>
											 	<a href="#">http://www.ceunits.com/counselor-addiction</a>
											 </p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			   </div>
			</div>
			<!--End-->

	<?php endwhile; // End of the loop.?>

<?php
get_footer();
