<?php

include 'inc/header.php';
include 'inc/nav.php';
?>
<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:208px">

            <!-- BEGIN PAGE TITLE-->
            <h5 class="page-title"> User Profile
            </h5>
            <div class="row">


                        <div class="col-lg-4 col-sm-6" id="map"  aside="float:right;"></div>

                        <style>
                          /* Always set the map height explicitly to define the size of the div
                           * element that contains the map. */
                          #map {
                              height: 200px;
                              width: : 350px;
                          }
                        </style>
                        <script>
                          // Note: This example requires that you consent to location sharing when
                          // prompted by your browser. If you see the error "The Geolocation service
                          // failed.", it means you probably did not give permission for the browser to
                          // locate you.
                          var map, infoWindow;
                          function initMap() {
                            map = new google.maps.Map(document.getElementById('map'), {
                              center: {lat: -34.397, lng: 150.644},
                              zoom: 6
                            });
                            infoWindow = new google.maps.InfoWindow;

                            // Try HTML5 geolocation.
                            if (navigator.geolocation) {
                              navigator.geolocation.getCurrentPosition(function(position) {
                                var pos = {
                                  lat: position.coords.latitude,
                                  lng: position.coords.longitude
                                };

                                infoWindow.setPosition(pos);
                                infoWindow.setContent('Location found.');
                                infoWindow.open(map);
                                map.setCenter(pos);
                              }, function() {
                                handleLocationError(true, infoWindow, map.getCenter());
                              });
                            } else {
                              // Browser doesn't support Geolocation
                              handleLocationError(false, infoWindow, map.getCenter());
                            }
                          }

                          function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                            infoWindow.setPosition(pos);
                            infoWindow.setContent(browserHasGeolocation ?
                                                  'Error: The Geolocation service failed.' :
                                                  'Error: Your browser doesn\'t support geolocation.');
                            infoWindow.open(map);
                          }
                        </script>
                        <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8HRDhI1KbAsn9Qoxr3FVy0R3PC16elBQ&callback=initMap">
                        </script>

                        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-8">

                                                <div class="visual">
                                                <img src="<?=$user->profile_pic;?>" alt="<?=$user->fname ; ?>" style="width:250px">
                                                </div>
                                                <div class="details">
                                                    <div class="number">
                                                        <span data-counter="counterup" data-value="2"> Name : <?=$user->fname ; ?></span>
                                                    </div>
                                                    <div class="desc"> Contact :<?=$user->contact ; ?> </div>
                                                    <div class="desc"> Address :<?=$user->address ; ?> </div>
                                                    <div class="desc"> Email : <?=$user->email ; ?></div>

                                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                                      Select image to upload:
                                                      <input type="file" name="fileToUpload" value="choose image" id="fileToUpload">
                                                      <input type="submit" value="Upload Image" name="submit">
                                                  </form>
                                                  <div class="card">
                                                         <a href="#"><i class="fa fa-twitter"></i></a>
                                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
            <div class="clearfix"></div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
<?php
include 'inc/footer.php';
 ?>


 </div>

 </body>
 </html>
