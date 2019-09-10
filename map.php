<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<?php include 'bingMapAPI.php' ?>


    <div id="map"></div>;


    <!-- MAP MY INDIA API stuff -->
    <script>

    var map = new MapmyIndia.Map('map', {center: [28.7041, 77.1025], zoomControl: true, hybrid: true});
    
    var n = L.marker([28.533409118652344,77.3821029663086]).addTo(map).bindPopup('<a href="login-info.php">Get User Info</a>');
    var a = L.marker([23.027769088745117,72.600250244140625]).addTo(map).bindPopup('<a href="login-info.php">Get User Info</a>');
    var b = L.marker([23.26470947265625,77.405189514160156]).addTo(map).bindPopup('<a href="login-info.php">Get User Info</a>');
    var k = L.marker([25.165309906005859,75.8511962890625]).addTo(map).bindPopup('<a href="login-info.php">Get User Info</a>');

        // var map = null; 
        
        // var latitudeArr = [28.533409118652344, 23.027769088745117, 23.26470947265625, 25.165309906005859];
        // var longitudeArr = [77.3821029663086, 72.600250244140625, 77.405189514160156, 75.8511962890625];
        // var mark = [];
        // var singlemarker = null;
        // var markers = [];
        // var markerClusters;

        // var size = <?php echo sizeof($lat); ?>;

        // window.onload = function() {
        //   var center = new L.LatLng(28.7041, 77.1025);
        //   var test_num_markers = <?php echo sizeof($lat); ?>;

        //   map = new MapmyIndia.Map('map', {
        //     zoomControl: true,
        //     hybrid: true,
        //     center:center,
        //     zoom: 10
        //   }); 
        //   /*map initialized*/
          
        //   /*Create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passsing it at the minimum div object, all others are optional...*/
          
        //   var test_num_markers = <?php echo sizeof($lat); ?>;
        //   //function to generate random markers
        //   var generate_markers = function(num_markers) {
        //     var bounds = map.getBounds();
        //     var map_sw = bounds.getSouthWest();
        //     var map_ne = bounds.getNorthEast();
        //     var lng_span = map_ne.lng - map_sw.lng;
        //     var lat_span = map_ne.lat - map_sw.lat;
        //     var markers = [];
        //     markerClusters = L.markerClusterGroup({
        //       chunkedLoading: true,
        //       maxClusterRadius: 100,
        //       disableClusteringAtZoom: 26,
        //       singleMarkerMode: false,
        //       addRegionToolTips: false
        //     });
        //     /* by default the Cluster group some defaults:
        //     showCoverageOnHover: When you mouse over a cluster it shows the bounds of its markers.
        //     zoomToBoundsOnClick: When you click a cluster we zoom to its bounds.
        //     spiderfyOnMaxZoom: When you click a cluster at the bottom zoom level we spiderfy it so you can see all of its markers. (Note: the spiderfy occurs at the current zoom level if all items within the cluster are still clustered at the maximum zoom level or at zoom specified by disableClusteringAtZoom option)
        //     removeOutsideVisibleBounds: Clusters and markers too far from the viewport are removed from the map for performance.
        //     spiderLegPolylineOptions**/
             


        //     for (var i = 0; i < num_markers; ++i) {
        //       for (var i = 0; i < latitudeArr.length; ++i) {
        //         for (var i = 0; i < longitudeArr.length; ++i) {
        //           var pt1 = new L.LatLng.Lat(latitudeArr);
        //           var pt2 = new L.LatLng.lng(longitudeArr);
        //           var pt = (pt1, pt2);
        //           var m = new L.marker(pt, {
        //             draggable: true
        //           });

        //           markers.push(m);
        //         }
        //       }
        //       m.bindPopup("marker clicked");

        //     // markers.push(m);
        //     } 


        //     var event_div = document.getElementById("event-log");
            
        //     markerClusters.addLayers(markers); //Bulk adding : addLayers is bulk methods for adding markers //
        //     map.addLayer(markerClusters); //add marker cluster to map//

        //     /*getAllChildMarkers: Returns the array of total markers contained within that cluster.
        //       getChildCount: Returns the total number of markers contained within that cluster.
        //     */

        //     return markers;
        //   };
        //   markers = generate_markers(test_num_markers);
        // };
          
    </script>
</body>
</html>

<!-- var latitudeArr =[<?php echo $string_version = implode(',', $lat); ?>]; -->
        <!-- var longitudeArr = [<?php echo $string_version = implode(',', $long); ?>]; -->

<!-- map my India api key:- a89ute9fch8ljqpmpnxrx7yewr2i1bgn -->
<!-- bing map api key:- ApyPeuf1n0Mrq5n9bwPyfVkHU2rYtod9FvmLNDJlRXUNFWwXXNxFrrC5rjfvxNyT -->