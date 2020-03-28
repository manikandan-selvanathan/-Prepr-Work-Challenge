<?php 
$title = "Admin";
require_once 'app/views/templates/header.php';
?> 
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>

    <script type="text/javascript">
    var labs=<?php echo $data['labs'] ?>;
    var locations=[];
    for(var i=0;i<labs.length;i++)
    {
        locations.push([labs[i]["title"],labs[i]["latitude"],labs[i]["longitude"],i]);
    } 


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(labs[0]["latitude"], labs[0]["longitude"]),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    
  </script>
    <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB25mmKi_IZTWfph5NMSOHaGtVyyz3wJTY">
    </script> -->
  </body>
</html>