<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Page Builder
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
					<?php
					$sf_image = get_post_thumbnail_id();
					$sf_image  = wp_get_attachment_image_src( $sf_image, 'full');
					$sf_image = $sf_image[0];
					?>
					<li><img src="<?php echo $sf_image;?>"></li>
				</ul>
			</div>
		</div>
		<!--End-->

		<!--Section : About Us-->

			<!--Two Column-->
			<section class="uk-block tm-block-large text-block-with-image" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/about-image.jpg') no-repeat 100% 0/ contain;">
				<div class="uk-container uk-container-center">

					<!--Content area-->
					<div class="uk-grid" data-uk-margin>
						<div class="uk-width-medium-2-3">
							<h1 class="uk-text-uppercase"><strong>about us</strong></h1>
							<div class="spacer-v-1"></div>
							<h3 class="uk-text"><i>Our History</i></h3>
							<div class="spacer-v-3"></div>
							<div class="uk-column-medium-1-2">
								<p>
									n 2005 a group of concerned individuals from the Department of Public Welfare Office of Mental Health and Substance Abuse Services (OMHSAS), Department of Aging, Corrections, Health and various other nonprofit organizations, including Feeling Blue Suicide Prevention Council and Pennsylvania Behavioral Health and Aging Coalition, many of whom had been involved with the Pennsylvania Youth Suicide Prevention Initiative met to form the Pennsylvania Adult/Older Adult Suicide Prevention Group.
								</p>
								<p>
									This group worked to create the State Suicide Prevention Strategy and hold an Awareness Event in collaboration with the Youth Initiative at the Capitol. The group also obtained funding to host the first statewide suicide prevention conference.
								</p>
								<p>
									In time, this group grew and changed its name to the Pennsylvania Adult/Older Adult Suicide Prevention Coalition and held trainings and offered support and resources throughout the state.
								</p>
								<p>
									In 2011, Feeling Blue Suicide Prevention Council decided to change its name to Pennsylvania Adult/Older Adult Suicide Prevention Coalition (the only nonprofit organization solely dedicated to preventing suicide in Pennsylvania) and move to Harrisburg in order to create one solid suicide prevention resource for Pennsylvania.
								</p>
							</div>
						</div>
					</div>
					<!--End-->
				</div>
			</section>
			<!--End-->

			<!--One Column-->
			<section class="uk-block tm-block-large text-block-with-image">
				<div class="uk-container uk-container-center">
					<!--Content area-->
					<div class="uk-grid" data-uk-margin>
						<div class="uk-width-medium-1-3">
							<h1 class="uk-text-uppercase"><strong>about us</strong></h1>
							<div class="spacer-v-1"></div>
							<h3 class="uk-text"><i>Our History</i></h3>
							<div class="spacer-v-3"></div>
							<div class="uk-column-medium-1-1">
								<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</b>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulut labore et dolore magnam aliquam quaerat voluptatem.
								</p>
								<div class="spacer-v-5"></div>
								<a class="uk-button">LEARN MORE</a>
							</div>
						</div>
					</div>
					<!--End-->
				</div>
			</section>
			<!--End-->

		<!--End-->

		<!--Section : Featured Block-->
		<section class="uk-block featured-block">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-2"></div>
				<div class="uk-h1 uk-text-uppercase uk-text-center"><strong>More</strong> ways <strong>to help</strong></div>
				<div class="spacer-v-9"></div>
				<div class="uk-width-medium-9-10 uk-container-center">
					<div class="uk-grid uk-margin-large-bottom" data-uk-margin="{cls:'uk-margin-large-top'}">
						<div class="uk-width-medium-1-2">
							<div class="tm-grid-content">
								<div class="spacer-v-1"></div>
								<h6>GIVE BACK &amp; DONATE</h6>
								<div class="spacer-v-1"></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/rc-5.png">
							</div>
						</div>
						<div class="uk-width-medium-1-2">
							<div class="tm-grid-content">
								<div class="spacer-v-1"></div>
								<h6>JOIN AOASPC</h6>
								<div class="spacer-v-1"></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/rc-3.png">
							</div>
						</div>
						<div class="uk-width-medium-1-2">
							<div class="tm-grid-content">
								<div class="spacer-v-1"></div>
								<h6>GET TRAINED  IN SUICIDE PREVENTION</h6>
								<div class="spacer-v-1"></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/rc-1.png">
							</div>
						</div>
						<div class="uk-width-medium-1-2">
							<div class="tm-grid-content">
								<div class="spacer-v-1"></div>
								<h6>VOLUNTEER AT AN EVENT</h6>
								<div class="spacer-v-1"></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/rc-5.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Hero Callout-->
		<section class="uk-block tm-block-large hero-callout" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/all-resource-bg.jpg') no-repeat 0 0/ cover;">
			<div class="uk-position-relative">
				<div class="uk-container uk-container-center uk-text-center">
					<div class="spacer-v-8"></div>
					<h3>Are You Campus Factory or Staff?</h3>
					<div class="uk-width-large-4-10 uk-container-center">
						<div class="spacer-v-1"></div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
						</p>
						<div class="spacer-v-2"></div>
						<a class="uk-button-secondary uk-text-capitalize">Learn About HESPC</a>
						<div class="spacer-v-8"></div>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Icon Slider-->
		<section class="icon-slider">
			<div class="uk-container uk-container-center">
				<div class="uk-width-medium-8-10 uk-container-center" data-uk-slideset="{default: 5, autoplay: true}">
					<div class="uk-slidenav-position">
						<ul class="uk-grid uk-slideset uk-flex-middle">
							<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-image1.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-image2.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-image3.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-image4.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-image5.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon-image4.png"></a></li>
						</ul>
						<a  class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
						<a class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Numbered Block-->
		<section class="numbered-block uk-block">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-2"></div>
				<div class="uk-h1 uk-text-uppercase uk-text-center">Youth Suicide <strong>Warning Signs</strong></div>
				<div class="spacer-v-8"></div>
				<h6 class="uk-text-center">If you are concerned about someone, ask yourself the following questions.</h6>
				<div class="spacer-v-5"></div>
				<div class="uk-grid" data-uk-margin="{cls: 'uk-margin-top'}">
					<div class="uk-width-medium-1-3">
						<div class="uk-panel uk-panel-box">
							<h3>01.</h3>
							<div class="spacer-v-1"></div>
							<h4>Lorem Ipsum Dolar</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
							</p>
							<div class="spacer-v-4"></div>
							<a href="#" class="uk-position-cover"></a>
						</div>
					</div>
					<div class="uk-width-medium-1-3">
						<div class="uk-panel uk-panel-box">
							<h3>02.</h3>
							<div class="spacer-v-1"></div>
							<h4>Lorem Ipsum Dolar</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
							</p>
							<div class="spacer-v-4"></div>
							<a href="#" class="uk-position-cover"></a>
						</div>
					</div>
					<div class="uk-width-medium-1-3">
						<div class="uk-panel uk-panel-box">
							<h3>03.</h3>
							<div class="spacer-v-1"></div>
							<h4>Lorem Ipsum Dolar</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
							</p>
							<div class="spacer-v-4"></div>
							<a href="#" class="uk-position-cover"></a>
						</div>
					</div>
				</div>
				<div class="spacer-v-2"></div>
			</div>
		</section>
		<!--End-->

		<!--Section : All Resources Icon-->

		<!--End-->

		<!--Section : Featured Products-->
		<section class="featured-product-block">
			<div class="uk-container uk-container-center">
				<div class="uk-grid uk-flex-middle" data-uk-margin="{cls: 'uk-margin-top'}">
					<div class="uk-width-medium-1-4">
						<div class="spacer-v-2 uk-visible-small"></div>
						<h4>Featured</h4>
						<div class="spacer-v-1"></div>
						<h3>MERCHANDISE &amp; GIFTS</h3>
						<div class="spacer-v-1"></div>
						<a href="#" class="uk-text-capitalize see-more">See All Products</a>
					</div>
					<div class="uk-width-medium-3-4">
						<div data-uk-slideset="{small: 1, medium: 3, large: 3, autoplay: true}">
							<div class="uk-slidenav-position">
								<ul class="uk-grid uk-grid-collapse uk-slideset">
									<li class="uk-text-center">
										<figure class="uk-overlay uk-overlay-hover">
										    <img src="<?php echo get_template_directory_uri();?>/assets/images/product-1.jpg" alt="">
										    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
										    	<div class="uk-text-center">
										    		<h5 class="uk-text-uppercase">teal bravelet <sup>tm</sup></h5>
										    		<div class="spacer-v-1"></div>
										    		<h6 class="uk-text-capitalize">Original Cutton Tees</h6>
										    	</div>
										    </figcaption>
										</figure>
									</li>
									<li class="uk-text-center">
										<figure class="uk-overlay uk-overlay-hover">
										    <img src="<?php echo get_template_directory_uri();?>/assets/images/product-2.jpg" alt="">
										    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
										    	<div class="uk-text-center">
										    		<h5 class="uk-text-uppercase">teal bravelet <sup>tm</sup></h5>
										    		<div class="spacer-v-1"></div>
										    		<h6 class="uk-text-capitalize">Original Leather Bracelet</h6>
										    	</div>
										    </figcaption>
										</figure>
									</li>
									<li class="uk-text-center">
										<figure class="uk-overlay uk-overlay-hover">
										    <img src="<?php echo get_template_directory_uri();?>/assets/images/product-3.jpg" alt="">
										    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
										    	<div class="uk-text-center">
										    		<h5 class="uk-text-uppercase">teal bravelet <sup>tm</sup></h5>
										    		<div class="spacer-v-1"></div>
										    		<h6 class="uk-text-capitalize">Cup</h6>
										    	</div>
										    </figcaption>
										</figure>
									</li>
								</ul>
							</div>
							<ul class="uk-slideset-nav uk-dotnav uk-flex-center uk-visible-small ">
								<li data-uk-slideset-item="0" class="uk-active"><a></a></li>
								<li data-uk-slideset-item="1"><a></a></li>
								<li data-uk-slideset-item="2"><a></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End-->
		<!--Section : Testimonial Block-->
		<section class="testimonial-block tm-block-large">
			<div class="uk-container uk-container-center uk-text-center">
				<div class="uk-h1 uk-text-uppercase"><strong>Our</strong> testimonials</div>
				<!--Testimonial Slider-->
				<div class="spacer-v-8"></div>
				<div class="uk-width-medium-7-10 uk-container-center" data-uk-slideset="{default: 1, autoplay: true}">
					<div class="uk-slidenav-position">
						<ul class="uk-grid uk-grid-collapse uk-slideset">
							<li>
								<p>
									“Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est commodo luctus, nisi erat ”
								</p>
								<div class="spacer-v-10"></div>
								<h4 class="uk-text-uppercase">CHANEL IMAN, PINTEREST</h4>
							</li>
							<li>
								<p>
									“Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est commodo luctus, nisi erat ”
								</p>
								<div class="spacer-v-10"></div>
								<h4 class="uk-text-uppercase">CHANEL IMAN</h4>
							</li>
							<li>
								<p>
									“Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est commodo luctus, nisi erat ”
								</p>
								<div class="spacer-v-10"></div>
								<h4 class="uk-text-uppercase">CHANEL IMAN, PINTEREST</h4>
							</li>
							<li>
								<p>
									“Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est commodo luctus, nisi erat ”
								</p>
								<div class="spacer-v-10"></div>
								<h4 class="uk-text-uppercase">CHANEL IMAN, PINTEREST</h4>
							</li>
							<li>
								<p>
									“Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est commodo luctus, nisi erat ”
								</p>
								<div class="spacer-v-10"></div>
								<h4 class="uk-text-uppercase">CHANEL IMAN</h4>
							</li>
							<li>
								<p>
									“Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est commodo luctus, nisi erat ”
								</p>
								<div class="spacer-v-10"></div>
								<h4 class="uk-text-uppercase">CHANEL IMAN, PINTEREST</h4>
							</li>
						</ul>
					</div>
					<ul class="uk-slideset-nav uk-dotnav uk-flex-center">
						<li data-uk-slideset-item="0" class="uk-active"><a></a></li>
						<li data-uk-slideset-item="1"><a></a></li>
						<li data-uk-slideset-item="2"><a></a></li>
						<li data-uk-slideset-item="3"><a></a></li>
						<li data-uk-slideset-item="4"><a></a></li>
						<li data-uk-slideset-item="5"><a></a></li>
					</ul>
				</div>
				<!--End-->
			</div>
		</section>
		<!--End-->
		<!--Section : Right Align Text-->
		<section class="uk-block tm-block-large text-block-with-image" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/stock-image.jpg') no-repeat 0 0/ contain;">
			<div class="uk-container uk-container-center">
				<!--Content area-->
				<div class="uk-grid" data-uk-margin>
					<div class="uk-width-medium-1-2 uk-push-1-2">
						<h1 class="uk-text-uppercase"><strong>about us</strong></h1>
						<div class="spacer-v-3"></div>
						<div class="uk-column-medium-1-1">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							<div class="spacer-v-5"></div>
						</div>
					</div>
				</div>
				<!--End-->
			</div>
		</section>
		<!--End-->

		<!--Section : All Resources Icon Block-->

		<!--End-->

		<!--Section : Our Mission Block-->
		<section class="uk-block tm-block-large our-mission-block" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/mission-image.jpg') no-repeat 100% 0/ contain;">
			<div class="uk-container uk-container-center">
				<!--Content area-->
				<div class="uk-grid" data-uk-margin>
					<div class="uk-width-medium-1-2">
						<h3 class="uk-text"><i>Believe in Change</i></h3>
						<div class="spacer-v-1"></div>
						<h1 class="uk-text-uppercase"><strong>OUR MISSION &amp; OUR VISION</strong></h1>
						<div class="spacer-v-3"></div>
						<div class="uk-column-medium-1-1">
							<p>
								Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Vestibulum id ligula porta felis euismod semper.
							</p>
							<p>
								Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.
							</p>
							<div class="spacer-v-5"></div>
						</div>
					</div>
				</div>
				<!--End-->
			</div>
		</section>
		<!--End-->

		<!--Section : Our Team-->
		<section class="uk-block our-team">
			<div class="uk-container uk-container-center">
				<div class="uk-width-9-10 uk-container-center">
					<div class="uk-text-uppercase uk-h1"><strong>Our Team</strong></div>
					<div class="spacer-v-5"></div>
					<div class="uk-grid uk-hidden-small" data-uk-grid="{cls: 'uk-margin-top'}">
						<div class="uk-width-medium-1-2">
							<!--Image switcher-->
							<ul class="uk-grid image-switcher" data-uk-margin="{cls: 'single-resource-category-margin'}" data-uk-switcher="{connect:'#switcher-content-1'}">
		                        <li class="uk-width-medium-1-3">
		                        	<a href="#">
		                        		<figure class="uk-overlay  uk-overlay-hover">
			                        		<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member1.jpg">
			                        		<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
			                        			<div>
				                        			<h5>ANNE HAWKINS</h5>
				                        			<h6>CEO / Marketing Guru</h6>
				                        		</div>
			                        		</figcaption>
										</figure>
		                        	</a>
		                        </li>
		                        <li class="uk-width-medium-1-3">
		                        	<a href="#">
		                        		<figure class="uk-overlay  uk-overlay-hover">
			                        		<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member2.jpg">
			                        		<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
			                        			<div>
				                        			<h5>ANNE HAWKINS</h5>
				                        			<h6>CEO / Marketing Guru</h6>
				                        		</div>
			                        		</figcaption>
										</figure>
		                        	</a>
		                        </li>
		                        <li class="uk-width-medium-1-3">
		                        	<a href="#">
		                        		<figure class="uk-overlay  uk-overlay-hover">
			                        		<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member3.jpg">
			                        		<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
			                        			<div>
				                        			<h5>ANNE HAWKINS</h5>
				                        			<h6>CEO / Marketing Guru</h6>
				                        		</div>
			                        		</figcaption>
										</figure>
		                        	</a>
		                        </li>
		                        <li class="uk-width-medium-1-3 uk-active">
		                        	<a href="#">
		                        		<figure class="uk-overlay  uk-overlay-hover">
			                        		<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member4.jpg">
			                        		<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
			                        			<div>
				                        			<h5>ANNE HAWKINS</h5>
				                        			<h6>CEO / Marketing Guru</h6>
				                        		</div>
			                        		</figcaption>
										</figure>
		                        	</a>
		                        </li>
		                        <li class="uk-width-medium-1-3">
		                        	<a href="#">
		                        		<figure class="uk-overlay  uk-overlay-hover">
			                        		<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member5.jpg">
			                        		<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
			                        			<div>
				                        			<h5>ANNE HAWKINS</h5>
				                        			<h6>CEO / Marketing Guru</h6>
				                        		</div>
			                        		</figcaption>
										</figure>
		                        	</a>
		                        </li>
		                        <li class="uk-width-medium-1-3">
		                        	<a href="#">
		                        		<figure class="uk-overlay  uk-overlay-hover">
			                        		<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member6.jpg">
			                        		<figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-bottom">
			                        			<div>
				                        			<h5>ANNE HAWKINS</h5>
				                        			<h6>CEO / Marketing Guru</h6>
				                        		</div>
			                        		</figcaption>
										</figure>
		                        	</a>
		                        </li>
		                    </ul>
		                    <!--End-->
						</div>
						<div class="uk-width-medium-1-2">
							<!--Content items-->
							<ul id="switcher-content-1" class="uk-switcher switcher-content">
			                    <li class="uk-flex uk-flex-center">
			                    	<!--Item Content-->
			                    	<div class="uk-width-medium-8-10">
				                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member1.jpg">
				                    	<div class="spacer-v-3"></div>
				                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
				                    	<div class="spacer-v-1"></div>
				                    	<h6>CEO / Marketing Guru</h6>
				                    	<div class="spacer-v-2"></div>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				                    	</p>
				                    </div>
			                    	<!--End-->
			                    </li>
			                    <li class="uk-flex uk-flex-middle uk-flex-center">
			                    	<!--Item Content-->
			                    	<div class="uk-width-medium-8-10">
				                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member2.jpg">
				                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
				                    	<h6>CEO / Marketing Guru</h6>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				                    	</p>
				                    </div>
			                    	<!--End-->
			                    </li>
			                    <li class="uk-flex uk-flex-middle uk-flex-center">
			                    	<!--Item Content-->
			                    	<div class="uk-width-medium-8-10">
				                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member3.jpg">
				                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
				                    	<h6>CEO / Marketing Guru</h6>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				                    	</p>
				                    </div>
			                    	<!--End-->
			                    </li>
			                    <li class="uk-flex uk-flex-middle uk-flex-center uk-active">
			                    	<!--Item Content-->
			                    	<div class="uk-width-medium-8-10">
				                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member4.jpg">
				                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
				                    	<h6>CEO / Marketing Guru</h6>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				                    	</p>
				                    </div>
			                    	<!--End-->
			                    </li>
			                    <li class="uk-flex uk-flex-middle uk-flex-center">
			                    	<!--Item Content-->
			                    	<div class="uk-width-medium-8-10">
				                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member5.jpg">
				                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
				                    	<h6>CEO / Marketing Guru</h6>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				                    	</p>
				                    </div>
			                    	<!--End-->
			                    </li>
			                    <li class="uk-flex uk-flex-middle uk-flex-center">
			                    	<!--Item Content-->
			                    	<div class="uk-width-medium-8-10">
				                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member6.jpg">
				                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
				                    	<h6>CEO / Marketing Guru</h6>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				                    	</p>
				                    </div>
			                    	<!--End-->
			                    </li>
			                </ul>
							<!--End-->
						</div>
					</div>
					<div class="uk-visible-small switcher-content" data-uk-slideset="{default: 1, autoplay: true}">
						<div class="uk-slidenav-position">
							<ul class="uk-grid uk-grid-collapse uk-slideset">
								<li>
			                    	<!--Item Content-->
			                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member1.jpg">
			                    	<div class="spacer-v-3"></div>
			                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
			                    	<div class="spacer-v-1"></div>
			                    	<h6>CEO / Marketing Guru</h6>
			                    	<div class="spacer-v-2"></div>
			                    	<p>
			                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
			                    	</p>
			                    	<!--End-->
			                    </li>
			                    <li>
			                    	<!--Item Content-->
			                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/team-member1.jpg">
			                    	<div class="spacer-v-3"></div>
			                    	<h5 class="uk-text-uppercase">ANNE HAWKINS</h5>
			                    	<div class="spacer-v-1"></div>
			                    	<h6>CEO / Marketing Guru</h6>
			                    	<div class="spacer-v-2"></div>
			                    	<p>
			                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
			                    	</p>
			                    	<!--End-->
			                    </li>
							</ul>
						</div>
						<ul class="uk-slideset-nav uk-dotnav uk-flex-center">
							<li data-uk-slideset-item="0" class="uk-active"><a></a></li>
							<li data-uk-slideset-item="1"><a></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Two Column Text-->
		<section class="uk-block two-column-text-block">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-2"></div>
				<div class="uk-width-medium-7-10 uk-container-center">
					<h3><i>Our Background</i></h3>
					<div class="spacer-v-2"></div>
					<div class="uk-column-medium-1-2">
						<p>
							Since the 1980s, Pennsylvania has made strong efforts to prevent youth suicide through programs such as the Student Assistance Program (SAP), Services for Teens at Risk (STAR-Center), the Yellow Ribbon Program, and a variety of other approaches in local areas. The Advisory Committee of the Office of Mental Health and Substance Abuse Services (OMHSAS) prioritized a state suicide prevention plan as one of the major goals for OMHSAS. A work group was formed and began to meet in July 2005. This prevention plan is a collaborative effort between those dedicated individuals from both the public and private sectors of our state. The work group strives to raise awareness about suicide and its prevention so that fewer Pennsylvanians experience the pain and grief resulting from the suicide death of a loved one.
						</p>
						<p>
							Suicide claims the lives of over 1,300 Pennsylvanians each year—an average of 3.5 lives each day. It is estimated that each suicide directly affects six people. Therefore, over 7,800 Pennsylvanians become survivors of suicide each year. Suicide is one of the leading causes of death of young people ages 15-24.
						</p>
						<em>
							Data from the Centers for Disease Control indicate that approximately 500,000 teens attempt suicide each year.
						</em>
						<p>
							Former US Surgeon General David Satcher presented the Call to Action to Prevent Suicide in 1999, in which he stated that the problems of suicide and suicide prevention are critical public health priorities for our nation. The National Strategy for Suicide Prevention debuted in 2001.
						</p>
					</div>
				</div>
				<div class="spacer-v-2"></div>
			</div>
		</section>
		<!--End-->

		<!--Section : One Column Text-->
		<section class="uk-block two-column-text-block">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-2"></div>
				<div class="uk-width-medium-7-10 uk-container-center">
					<h3><i>Our Background</i></h3>
					<div class="spacer-v-2"></div>
					<div class="uk-column-medium-1-1">
						<p>
							Since the 1980s, Pennsylvania has made strong efforts to prevent youth suicide through programs such as the Student Assistance Program (SAP), Services for Teens at Risk (STAR-Center), the Yellow Ribbon Program, and a variety of other approaches in local areas. The Advisory Committee of the Office of Mental Health and Substance Abuse Services (OMHSAS) prioritized a state suicide prevention plan as one of the major goals for OMHSAS. A work group was formed and began to meet in July 2005. This prevention plan is a collaborative effort between those dedicated individuals from both the public and private sectors of our state. The work group strives to raise awareness about suicide and its prevention so that fewer Pennsylvanians experience the pain and grief resulting from the suicide death of a loved one.
						</p>
						<p>
							Suicide claims the lives of over 1,300 Pennsylvanians each year—an average of 3.5 lives each day. It is estimated that each suicide directly affects six people. Therefore, over 7,800 Pennsylvanians become survivors of suicide each year. Suicide is one of the leading causes of death of young people ages 15-24.
						</p>
						<em>
							Data from the Centers for Disease Control indicate that approximately 500,000 teens attempt suicide each year.
						</em>
						<p>
							Former US Surgeon General David Satcher presented the Call to Action to Prevent Suicide in 1999, in which he stated that the problems of suicide and suicide prevention are critical public health priorities for our nation. The National Strategy for Suicide Prevention debuted in 2001.
						</p>
					</div>
				</div>
				<div class="spacer-v-2"></div>
			</div>
		</section>
		<!--End-->

		<!--Section : One Column Text With Image-->
		<section class="uk-block one-column-text-with-image-block">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-2"></div>
				<div class="uk-width-medium-9-10 uk-container-center">
					<h3><i>Our Background</i></h3>
					<div class="spacer-v-2"></div>
					<div class="uk-grid uk-grid-divider" data-uk-margin="{cls: 'uk-margin-top'}">
						<div class="uk-width-medium-7-10">
							<p>
								Since the 1980s, Pennsylvania has made strong efforts to prevent youth suicide through programs such as the Student Assistance Program (SAP), Services for Teens at Risk (STAR-Center), the Yellow Ribbon Program, and a variety of other approaches in local areas. The Advisory Committee of the Office of Mental Health and Substance Abuse Services (OMHSAS) prioritized a state suicide prevention plan as one of the major goals for OMHSAS. A work group was formed and began to meet in July 2005. This prevention plan is a collaborative effort between those dedicated individuals from both the public and private sectors of our state. The work group strives to raise awareness about suicide and its prevention so that fewer Pennsylvanians experience the pain and grief resulting from the suicide death of a loved one.
							</p>
							<p>
								Suicide claims the lives of over 1,300 Pennsylvanians each year—an average of 3.5 lives each day. It is estimated that each suicide directly affects six people. Therefore, over 7,800 Pennsylvanians become survivors of suicide each year. Suicide is one of the leading causes of death of young people ages 15-24.
							</p>
							<em>
								Data from the Centers for Disease Control indicate that approximately 500,000 teens attempt suicide each year.
							</em>
							<p>
								Former US Surgeon General David Satcher presented the Call to Action to Prevent Suicide in 1999, in which he stated that the problems of suicide and suicide prevention are critical public health priorities for our nation. The National Strategy for Suicide Prevention debuted in 2001.
							</p>
						</div>
						<div class="uk-width-medium-3-10">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/poster.jpg">
						</div>
					</div>
				</div>
				<div class="spacer-v-2"></div>
			</div>
		</section>
		<!--End-->

		<!--Section : Bullet Text-->
		<section class="tm-block-large bullet-text-block">
			<div class="uk-container uk-container-center">
				<div class="uk-grid" data-uk-margin="{cls:'uk-margin-large-top'}">
					<div class="uk-width-medium-1-3">
						<h5>What to do if you suspect someone is suicidal</h5>
						<ul>
							<li>Talk to them alone in a private setting;</li>
						    <li>Ask them if they are thinking of killing them selves or are suicidal </li>
						    <li>Ask them if they have a plan.</li>
						</ul>
						<p>
							If the answer is yes, call your local County Crisis Team or take them to the Emergency Room <strong>RIGHT AWAY</strong> and <strong>DON'T</strong> leave them alone. 
						</p>
						<p>
							If the answer is no, make an appointment for them to see a mental health professional, i.e., therapist, psychologist, psychiatrist, or doctor as soon as possible, and ask them how you can help them. Try to get them help as soon as possible. Ask them to make an agreement with you that they will not hurt themselves before they get help, or that they will contact you if they feel they are in crisis, or feeling worse.
						</p>
					</div>
					<div class="uk-width-medium-1-3 uk-push-1-3">
						<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/images/people5.jpg">
						<p>
							<i>
								Check your local universities that offer graduate training in psychology or psychiatry. They often offer low cost therapy or medication management.
							</i>
						</p>
					</div>
					<div class="uk-width-medium-1-3 uk-pull-1-3">
						<h5>Who to contact if you suspect someone is suicidal</h5>
						<ul>
							<li>Mental health specialists, such as  psychologists, psychiatrists, social workers, or mental health counselors</li>
						    <li>Family doctors</li>
						    <li>Employee Assistance Programs (EAP)</li>
						    <li>Community mental health centers</li>
						    <li>Hospital psychiatry departments and outpatient clinics</li>
						    <li>University or medical school programs</li>
						    <li>State hospital outpatient clinics</li>
						    <li>Family services, social agencies, or clergy</li>
						    <li>Private clinics and facilities</li>
						    <li>Local medical and/or psychiatric societies</li>
						    <li>Health maintenance organizations</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Videos-->
			<section class="uk-block three-column-video-block">
				<div class="uk-container uk-container-center">
					<div class="uk-h1 uk-text-uppercase uk-text-center">
						<strong>our videos</strong>
					</div>
					<div class="spacer-v-6"></div>
					<div class="uk-grid" data-uk-margin="{cls: 'uk-margin-large-top'}">
						<div class="uk-width-medium-1-3">
							<div class="content">
								<div class="video-container">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail.jpg">
								</div>
								<div class="text-container">
									<h5>Lorem Ipsum Dolar</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
									</p>
								</div>
							</div>
						</div>
						<div class="uk-width-medium-1-3">
							<div class="content">
								<div class="video-container">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail.jpg">
								</div>
								<div class="text-container">
									<h5>Lorem Ipsum Dolar</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
									</p>
								</div>
							</div>
						</div>
						<div class="uk-width-medium-1-3">
							<div class="content">
								<div class="video-container">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail.jpg">
								</div>
								<div class="text-container">
									<h5>Lorem Ipsum Dolar</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="uk-block full-width-video-block">
				<div class="uk-overlay uk-width-1-1">
					<div class="video-section">
						<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail-large.jpg">
					</div>
					<div class="uk-overlay-panel uk-flex uk-flex-middle">
						<div class="overlay-content offset-caption">
							<a href="#" class="uk-h3">Watch Now</a>
							<div class="spacer-v-1"></div>
							<div class="uk-h1">
								<strong>SHARE</strong> THE <strong>LOVE</strong>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
						</div>
					</div>
				</div>
				<div class="uk-container uk-container-center">
					<div class="content-section">
						<h3>about <strong>share the love</strong></h3>
						<div class="spacer-v-1"></div>
						<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
							<div class="uk-width-medium-7-10">
								<div class="uk-column-medium-1-2">
									<p>
										In 2005 a group of concerned individuals from the Department of Public Welfare Office of Mental Health and Substance Abuse Services (OMHSAS), Department of Aging, Corrections, Health and various other nonprofit organizations, including Feeling Blue Suicide Prevention Council and Pennsylvania Behavioral Health and Aging Coalition, many of whom had been involved with the Pennsylvania Youth Suicide Prevention.
									</p>
									<p>
										In time, this group grew and changed its name to the Pennsylvania Adult/Older Adult Suicide Prevention Coalition and held trainings and offered support and resources throughout the state.
										In 2011, Feeling Blue Suicide Prevention Council decided to change its name to Pennsylvania Adult/Older Adult Suicide Prevention Coalition.
									</p>
								</div>
							</div>
							<div class="uk-width-medium-3-10 uk-text-right">
								<div>
									<div class="share-option">
										<span class="uk-h5">Share</span>
										<a href="#"><i class="uk-icon-facebook"></i></a>
										<a href="#"><i class="uk-icon-twitter"></i></a>
										<a href="#"><i class="uk-icon-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="uk-block video-block">
				<div class="uk-container uk-container-center">
					<div class="video-section">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail5.jpg">
					</div>
					<div class="content-section">
						<h3>about <strong>share the love</strong></h3>
						<div class="spacer-v-1"></div>
						<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
							<div class="uk-width-medium-7-10">
								<div class="uk-column-medium-1-2">
									<p>
										In 2005 a group of concerned individuals from the Department of Public Welfare Office of Mental Health and Substance Abuse Services (OMHSAS), Department of Aging, Corrections, Health and various other nonprofit organizations, including Feeling Blue Suicide Prevention Council and Pennsylvania Behavioral Health and Aging Coalition, many of whom had been involved with the Pennsylvania Youth Suicide Prevention.
									</p>
									<p>
										In time, this group grew and changed its name to the Pennsylvania Adult/Older Adult Suicide Prevention Coalition and held trainings and offered support and resources throughout the state.
										In 2011, Feeling Blue Suicide Prevention Council decided to change its name to Pennsylvania Adult/Older Adult Suicide Prevention Coalition.
									</p>
								</div>
							</div>
							<div class="uk-width-medium-3-10 uk-text-right">
								<div>
									<div class="share-option">
										<span class="uk-h5">Share</span>
										<a href="#"><i class="uk-icon-facebook"></i></a>
										<a href="#"><i class="uk-icon-twitter"></i></a>
										<a href="#"><i class="uk-icon-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="uk-block two-column-video-block">
				<div class="uk-container uk-container-center">
					<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}" data-uk-grid-match>
						<div class="uk-width-medium-7-10 uk-flex uk-flex-middle">
							<div>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail5.jpg">
							</div>
						</div>
						<div class="uk-width-medium-3-10 uk-flex uk-flex-middle">
							<div class="content-section">
								<h3>about <strong>share the love</strong></h3>
								<div class="spacer-v-1"></div>
								<p>
									In 2005 a group of concerned individuals from the Department of Public Welfare Office of Mental Health and Substance Abuse Services (OMHSAS), Department of Aging, Corrections, Health and various other nonprofit organizations, including Feeling Blue Suicide Prevention Council and Pennsylvania Behavioral Health and Aging Coalition, many of whom had been involved with the Pennsylvania Youth Suicide Prevention.
								</p>
								<p>
									In time, this group grew and changed its name to the Pennsylvania Adult/Older Adult Suicide Prevention Coalition and held trainings and offered support and resources throughout the state.
									In 2011, Feeling Blue Suicide Prevention Council decided to change its name to Pennsylvania Adult/Older Adult Suicide Prevention Coalition.
								</p>
								<div class="share-option">
									<span class="uk-h5">Share</span>
									<a href="#"><i class="uk-icon-facebook"></i></a>
									<a href="#"><i class="uk-icon-twitter"></i></a>
									<a href="#"><i class="uk-icon-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!--End-->

		<!--Section : Donate Callout-->
		<section class="uk-block donate-callout" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/all-resource-bg.jpg') no-repeat 0 0/ cover;">
			<div class="uk-position-relative">
				<div class="uk-container uk-container-center">
					<div class="uk-grid uk-flex-middle" data-uk-margin="{cls:'uk-margin-large-top'}">
						<div class="uk-width-medium-7-10">
							<div class="uk-h1 uk-text-uppercase"><strong>Want to give back?</strong></div>
							<div class="spacer-v-2"></div>
							<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</h5>
						</div>
						<div class="uk-width-medium-3-10 uk-text-center">
							<a class="uk-button-secondary uk-text-capitalize">Donate Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Contact Us-->
		<section class="uk-block contact-us-block">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-1"></div>
				<div class="uk-h1 uk-text-uppercase uk-text-center">
					<strong>Contact Us</strong>
				</div>
				<div class="spacer-v-10"></div>
				<div class="uk-grid uk-grid-large" data-uk-margin="{cls:'uk-margin-large-top'}">
					<div class="uk-width-medium-6-10">
						<div class="contact-info">
							<div class="panel-header">
								<p>
									In an emergency, always call <strong>9-1-1</strong><br>
									If you or someone you know is in Emotional Distress,
									please call: <strong>1-800-273-TALK (8255) or dial 2-1-1</strong>
								</p>
							</div>
							<div class="panel-body">
								<h5><strong>Prevent Suicide Pennsylvania</strong></h5>
								<div class="spacer-v-2"></div>
								<div class="uk-grid" data-uk-margin="{cls:'uk-margin-large-top'}">
									<div class="uk-width-medium-6-10">
										<p>
											1600 Pennsylvania Ave NW, Washington,
											DC 20500, United States of America.
											<br><br>
											T: (202) 456-1111<br>
											E: info@pspa.org<br>
										</p>
									</div>
									<div class="uk-width-medium-4-10">
										<a class="uk-button uk-text-uppercase">Get Direction</a>
									</div>
								</div>
								<div class="uk-width-large-4-10">
									<div class="spacer-v-2"></div>
									<ul class="contact-social uk-navbar-nav">
										<li><a class="smGlobalBtn" href=""><i class="uk-icon-facebook"></i></a></li>
										<li><a class="smGlobalBtn" href=""><i class="uk-icon-twitter"></i></a></li>
										<li><a class="smGlobalBtn" href=""><i class="uk-icon-linkedin"></i></a></li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<div class="uk-width-medium-4-10">
						<div class="give-feedback">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Small Hero Callout-->
		<section class="uk-block small-hero-callout" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/all-resource-bg.jpg') no-repeat 0 0/ cover;">
			<div class="uk-position-relative">
				<div class="uk-container uk-container-center uk-text-center">
					<h3 class="uk-h1 uk-text-uppercase"><strong>Are You Campus Factory or Staff?</strong></h3>
					<div class="spacer-v-2"></div>
					<a class="uk-button-secondary uk-text-capitalize">Learn About HESPC</a>
				</div>
			</div>
		</section>
		<!--End-->

		<!--Section : Map Section-->
		<section class="map-block">

		</section>
		<!--End-->
	<?php endwhile; // End of the loop.?>

<?php
get_footer();
