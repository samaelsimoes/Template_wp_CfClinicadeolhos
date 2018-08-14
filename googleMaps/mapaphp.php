
<style>
 #map {
    width: 100%;
    height: 400px;
    background-color: #grey;
}
</style>
<section class="map-container">
		<div id="map" style="height: 500px; width: auto;"></div>
</section>

<script>
    // cair na latitude e longetude desejada
    function initMap() {
        var uluru = {lat: -26.3054865, lng: -48.84465369999998};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
  	$('.map-container').click(function(){
		$(this).find('div').addClass('clicked')
	}).mouseleave(function(){
		$(this).find('div').removeClass('clicked')
	});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv75b4syUIktftmJc4dM_2_fy7DRAVuoU&callback=initMap" async defer></script>