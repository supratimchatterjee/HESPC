jQuery(document).ready(function($) {
	/*==Dropdown: label change ==*/
	$("#tm-filters1 li a").on("click", function() {
		var lebel = $(this).parent('li').data('value');
		document.getElementById("placeholder").innerHTML = lebel;
	});
	/*==End==*/
	/*==Offset Div==*/
	function updateCaptionOffset() {
		var navbarDiv = $('.uk-navbar'),
			captionDiv = $('.offset-caption');
		if (captionDiv.length < 1) return false;
		var navbarOffset = jQuery('.uk-navbar').offset().left;
		captionDiv.css('padding-left', navbarOffset + 'px');
	}
	$(window).on('resize load', function(event) {
		updateCaptionOffset();
	});
	$('svg .county').click(function() {
		window.location = payspi_js.siteurl + "/task-force-county-init/" + this.id;
	});
	$('#tm-filters a, #tm-filters1 a').click(function(event) {
		$('html, body').animate({
		scrollTop: $('#filter-title-start').offset().top - 150
		}, 500);
	});
	
	var ancloc = window.location.hash;
	if(ancloc){
		$('html, body').animate({
		scrollTop: $(ancloc).offset().top - 100
		}, 500);		
	}

	$('.current-menu-item .menu-item-2114').click(function(event) {
		$('html, body').animate({
		scrollTop: $('#featured-block').offset().top - 100
		}, 500);
	});
	$('.current-menu-item .menu-item-2115').click(function(event) {
		$('html, body').animate({
		scrollTop: $('#our-team').offset().top - 100
		}, 500);
	});
});
/* maps */
(function($) {
	/*
	 *  new_map
	 *
	 *  This function will render a Google Map onto the selected jQuery element
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$el (jQuery element)
	 *  @return	n/a
	 */
	function new_map($el) {
		// var
		var $markers = $el.find('.marker');
		// vars
		var args = {
			zoom: 16,
			center: new google.maps.LatLng(0, 0),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		// create map
		var map = new google.maps.Map($el[0], args);
		// add a markers reference
		map.markers = [];
		// add markers
		$markers.each(function() {
			add_marker($(this), map);
		});
		// center map
		center_map(map);
		// return
		return map;
	}
	/*
	 *  add_marker
	 *
	 *  This function will add a marker to the selected Google Map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$marker (jQuery element)
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */
	function add_marker($marker, map) {
		// var
		var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
		// create marker
		var marker = new google.maps.Marker({
			position: latlng,
			map: map
		});
		// add to array
		map.markers.push(marker);
		// if marker contains HTML, add it to an infoWindow
		if ($marker.html()) {
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content: $marker.html()
			});
			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});
		}
	}
	/*
	 *  center_map
	 *
	 *  This function will center the map, showing all markers attached to this map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */
	function center_map(map) {
		// vars
		var bounds = new google.maps.LatLngBounds();
		// loop through all markers and create bounds
		$.each(map.markers, function(i, marker) {
			var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
			bounds.extend(latlng);
		});
		// only 1 marker?
		if (map.markers.length == 1) {
			// set center of map
			map.setCenter(bounds.getCenter());
			map.setZoom(16);
		} else {
			// fit to bounds
			map.fitBounds(bounds);
		}
	}
	/*
	 *  document ready
	 *
	 *  This function will render each map when the document is ready (page has loaded)
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	5.0.0
	 *
	 *  @param	n/a
	 *  @return	n/a
	 */
	// global var
	var map = null;
	$(document).ready(function() {
		$('.acf-map').each(function() {
			// create map
			map = new_map($(this));
		});
	});
})(jQuery);