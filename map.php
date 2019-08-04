<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<?php include 'bingMapAPI.php' ?>


    <div id="map"></div>;


    <!-- MAP MY INDIA API stuff -->
    <script>
        var map = null;
        var latitudeArr = [28.549948, 28.552232, 28.551748, 28.551738, 28.548602, 28.554603, 28.545639, 28.544339, 28.553196, 28.545842];
        var longitudeArr = [77.268241, 77.268941, 77.269022, 77.270164, 77.271546, 77.268305, 77.26480, 77.26424, 77.265407, 77.264195];
        var mark = [];
        var singlemarker = null;
        var markers = null;
        var markerClusters;

        window.onload = function() {
          var test_num_markers = 5;

          map = new MapmyIndia.Map('map', {
            zoomControl: true,
            hybrid: true,
            zoom: 10
          }); 
          /*map initialized*/
          
          /*Create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passsing it at the minimum div object, all others are optional...*/
          
          var test_num_markers = 5;
          //function to generate random markers
          var generate_markers = function(num_markers) {
            var bounds = map.getBounds();
            var map_sw = bounds.getSouthWest();
            var map_ne = bounds.getNorthEast();
            var lng_span = map_ne.lng - map_sw.lng;
            var lat_span = map_ne.lat - map_sw.lat;
            var markers = [];
            markerClusters = L.markerClusterGroup({
              chunkedLoading: true,
              maxClusterRadius: 100,
              disableClusteringAtZoom: 26,
              singleMarkerMode: false,
              addRegionToolTips: false
            });
            /* by default the Cluster group some defaults:
            showCoverageOnHover: When you mouse over a cluster it shows the bounds of its markers.
            zoomToBoundsOnClick: When you click a cluster we zoom to its bounds.
            spiderfyOnMaxZoom: When you click a cluster at the bottom zoom level we spiderfy it so you can see all of its markers. (Note: the spiderfy occurs at the current zoom level if all items within the cluster are still clustered at the maximum zoom level or at zoom specified by disableClusteringAtZoom option)
            removeOutsideVisibleBounds: Clusters and markers too far from the viewport are removed from the map for performance.
            spiderLegPolylineOptions**/


            


            for (var i = 0; i < num_markers; ++i) {
              var pt = new L.LatLng(map_sw.lat + Math.random() * lat_span, map_sw.lng + Math.random() * lng_span);
              var m = new L.marker(pt, {
                draggable: true
              });
              m.bindPopup("marker clicked");

            markers.push(m);
            }  


            var event_div = document.getElementById("event-log");
            
            markerClusters.addLayers(markers); //Bulk adding : addLayers is bulk methods for adding markers //
            map.addLayer(markerClusters); //add marker cluster to map//

            /*getAllChildMarkers: Returns the array of total markers contained within that cluster.
              getChildCount: Returns the total number of markers contained within that cluster.
            */

            return markers;
          };
          markers = generate_markers(test_num_markers);
        };
          
    </script>
</body>
</html>




<!-- bing map api key:- ApyPeuf1n0Mrq5n9bwPyfVkHU2rYtod9FvmLNDJlRXUNFWwXXNxFrrC5rjfvxNyT -->
