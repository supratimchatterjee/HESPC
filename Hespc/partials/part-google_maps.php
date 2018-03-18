
<!--Section : Map Section-->
<section class="map-block" style="background-color:rgb(244,244,247)">
	<?php
	$location = get_sub_field('google_maps');
	if( !empty($location) ):
	?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
		<div class="uk-overlay-panel uk-width-1-1">
			<div class="uk-container uk-container-center">
				<div class="spacer-v-6"></div>
				<div class="overlay-content">
					<h3>Directions</h3>
					<p>
					<?php the_sub_field('directions');?>
					</p>
				</div>
			</div>
		</div>
	<?php endif; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSihP7krAvBkIEd_p2Loih8quSAPJIPi4"></script>
</section>
