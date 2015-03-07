<div id="map-canvas" class="row pull-right" style="margin-right: 50px;margin-top: 80px;width:30%;height:100%;"></div>
<div class="container">
    <div class="row">

        <div class="col-md-7">
            <form method="post" action="<?php echo site_url('welcome/publish_offer/'.$id)?>">
                <h3>Offer a ride on your next long journey</h3>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
         Type of trip
      </h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label for="one" class="radio">
                                <input type="radio" name="trip" value="0">one-time trip</label>
                        </div>
                        <div class="col-md-3">
                            <label for="recurring" class="radio">
                                <input type="radio" name="trip" value="1">Recurring trip</label>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
         Exact route
      </h3>
                    </div>
                    <div class="panel-body">
                        <label for="Depature point">Depature point</label>
                        <input type="text" class="form-control" id="start" name="start" placeholder="Depature point" onchange="calcRoute();">
                        <label for="Arrival point">Arrival point</label>
                        <input type="text" class="form-control" id="end" name="end" placeholder="Arrival point" onchange="calcRoute();">
                        <p id="p1">
                        <label for="location1">location1</label>    
                        <input type="text" id="point1" name="point1" class="form-control" placeholder="stop point1" onchange="calcRoute();" />
                        <button class="btn btn-danger" type="button" id="b1" onclick="clearMarkers()" onclick="calcRoute()">remove</button>
                        </p>
                        <button class="btn btn-primary" type="button" id="h1">Add</button> 
                        <p id="p2">
                        <label for="location2">location2</label>    
                        <input type="text" id="point2" name="point2" class="form-control" placeholder="stop point2" onchange="calcRoute();" />
                        <button class="btn btn-danger" type="button" id="b2">Remove</button>
                        </p>
                        <button class="btn btn-primary" type="button" id="h2">Add</button>
                        <p id="p3">
                        <label for="location3">location3</label>
                        <input type="text" id="point3" name="point3" class="form-control" placeholder="stop point3" onchange="calcRoute();" />
                        <button class="btn btn-danger" type="button" id="b3">Remove</button>
                        </p>
                        <button class="btn btn-primary" type="button" id="h3">Add</button>
                        <p id="p4">
                        <label for="location4">location4</label>    
                        <input type="text" id="point4" name="point4" class="form-control" placeholder="stop point4" onchange="calcRoute();" />
                        <button class="btn btn-danger" type="button" id="b4">Remove</button>
                        </p>
                        <button class="btn btn-primary" type="button" id="h4">Add</button>    
                        <input type="hidden" name="start_lat" id="start_lat"/>
            <input type="hidden" name="start_lon" id="start_lon"/>
            <input type="hidden" name="end_lat" id="end_lat"/>
            <input type="hidden" name="end_lon" id="end_lon"/>
            <input type="hidden" name="point1_lat" id="point1_lat"/>
            <input type="hidden" name="point1_lon" id="point1_lon"/>
            <input type="hidden" name="point2_lat" id="point2_lat"/>
            <input type="hidden" name="point2_lon" id="point2_lon"/>
            <input type="hidden" name="point3_lat" id="point3_lat"/>
            <input type="hidden" name="point3_lon" id="point3_lon"/>
            <input type="hidden" name="point4_lat" id="point4_lat"/>
            <input type="hidden" name="point4_lon" id="point4_lon"/>    
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <table>
                            <tr>
                                <td>
                                    <h3 class="panel-title">Date and Time</h3>
                                </td>
                                <td>
                                    <h3 class="panel-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                </td>
                                <td>
                                    <h3 class="panel-title"><input type="checkbox" name="round_trip" id="round_trip" value="1"> Round trip</h3>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="depature date">
                                    <input class="form-control" type="text" id="depature_date" name="depature_date" placeholder="depature date">
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label for="depature time">
                                    <select class="form-control" name="depature_time" placeholder="Depature point">
                                        <option value="" selected="selected">hr</option>
                                        <option value="0">00</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label for="depature time">
                                    <select class="form-control" name="depature_min" placeholder="Depature point">
                                        <option value="" selected="selected">min</option>
                                        <option value="00">00</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </label>
                            </div>

                        </div>
                        <div class="row" id="round_check">
                            <div class="col-md-5">
                                <label for="distict date">
                                    <input class="form-control" type="text" id="distict_date" name="distict_date" placeholder="destict date">
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label for="distict time">
                                    <select class="form-control" name="distict_time" placeholder="Depature point">
                                        <option value="" selected="selected">hr</option>
                                        <option value="0">00</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label for="depature time">
                                    <select class="form-control" name="distict_min" placeholder="Depature point">
                                        <option value="" selected="selected">min</option>
                                        <option value="00">00</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
         Number of seats offered:
      </h3>
                    </div>
                    <div class="panel-body">


                        <input type="text" class="form-control" id="seat" name="seat" placeholder="seat available">

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
         Price per passenger
      </h3>
                    </div>
                    <div class="panel-body">


                        <input type="text" class="form-control" id="cost" name="cost" placeholder="cost">

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
         Car Perference
      </h3>
                    </div>
                    <div class="panel-body">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="music" value="1"> Music
                            </label>
                            <label>
                                <input type="checkbox" name="ac" value="1"> AC
                            </label>
                            <label>
                                <input type="checkbox" name="luggages" value="1"> Luggages
                            </label>
                            <label>
                                <input type="checkbox" name="pets" value="1"> Pets
                            </label>
                            <label>
                                <input type="checkbox" name="smoke" value="1"> Smoke
                            </label>
                            <label>
                                <input type="checkbox" name="ladies_only" value="1"> ladies only
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>


            </form>
        </div>


        <!--<div class="col-md-5">-->
        <!---->
        <!---->
        <!---->
        <!--</div>-->
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('application/assets/js/bootstrapValidator.js')?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#depature_date').datepicker({});
        $('#distict_date').datepicker({});
    });
</script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
    $("#round_check").hide();
    
    $("#round_trip").click(function(){
        $("#round_check").toggle();
    });
});
$(document).ready(function() {
$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});    
    
</script>


<style>
    html,
    body,
    #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
    }
</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&v=3&input=india&types=geocode"></script>
<script>
        var directionsDisplay;
        var checkboxArray = [];
        var directionsService = new google.maps.DirectionsService();
        var map;
        var x = 0;
        function clearMarkers() {
        checkboxArray[i]='';
        }

        
        
        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var pondicherry = new google.maps.LatLng(11.56, 79.53);
            var mapOptions = {
                zoom: 7,
                center: pondicherry,
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            directionsDisplay.setMap(map);
            var options = {
                types: ['(cities)'],
                componentRestrictions: {
                    country: 'IN'
                }
            };
            new google.maps.places.Autocomplete(start, options);
            new google.maps.places.Autocomplete(end, options);
            new google.maps.places.Autocomplete(point1, options);
            new google.maps.places.Autocomplete(point2, options);
            new google.maps.places.Autocomplete(point3, options);
            new google.maps.places.Autocomplete(point4, options);
        }
        $(document).ready(function() {
            $("#p1").hide();
            $("#b").hide();
            $("#p2").hide();
            $("#b1").hide();
            $("#p3").hide();
            $("#b2").hide();
            $("#p4").hide();
            $("#b3").hide();
            $("#p5").hide();
            $("#b4").hide();
            $("#p6").hide();
            $("#b5").hide();
            $("#h2").hide();
            $("#h3").hide();
            $("#h4").hide();
            $("#h5").hide();
            
            $("#h1").click(function() {
                $("#p1").show();
                $("#b1").show();
                $("#h1").hide();
                $("#h2").show();
            });
            $("#h2").click(function() {
                $("#p2").show();
                $("#b2").show();
                $("#h2").hide();
                $("#h3").show();
            });
            $("#h3").click(function() {
                $("#p3").show();
                $("#b3").show();
                $("#h3").hide();
                $("#h4").show();
            });
            $("#h4").click(function() {
                $("#p4").show();
                $("#b4").show();
                $("#h4").hide();
            });
            $("#b1").click(function() {
                $("#p1").hide();
                $("#b1").hide();
                $("#h1").show();
                $("#h2").hide();
                $("#h3").hide();
                $("#h4").hide();
                $("#h5").hide();
                $('#point1').removeAttr('value');
                checkboxArray[0]='';
                calcRoute();
           });
            $("#b2").click(function() {
                $("#p2").hide();
                $("#b2").hide();
                $("#h2").show();
                $("#h3").hide();
                $("#h1").hide();
                $("#h4").hide();
                $("#h5").hide();
                $('#point2').removeAttr('value');
                checkboxArray[1]='';
                calcRoute();
            });
            $("#b3").click(function() {
                $("#p3").hide();
                $("#b3").hide();
                $("#h3").show();
                $("#h4").hide();
                $("#h1").hide();
                $("#h2").hide();
                $("#h5").hide();
               $('#point3').removeAttr('value');
                checkboxArray[2]='';
                calcRoute();
            });
            $("#b4").click(function() {
                $("#p4").hide();
                $("#b4").hide();
                $("#h4").show();
                $("#h1").hide();
                $("#h3").hide();
                $("#h5").hide();
                $('#point4').removeAttr('value');
                checkboxArray[3]='';
                calcRoute();
            });
        });

        function calcRoute() {
            var geocoder = new google.maps.Geocoder();
            var waypts = [];
            var start = document.getElementById('start').value;
            var end = document.getElementById('end').value;
            
             
            if (document.getElementById('point1').value) {
                checkboxArray[0] = document.getElementById('point1').value;
            }
            if (document.getElementById('point2').value) {
                checkboxArray[1] = document.getElementById('point2').value;
            }
            if (document.getElementById('point3').value) {
                checkboxArray[2] = document.getElementById('point3').value;
            }
            if (document.getElementById('point4').value) {
                checkboxArray[3] = document.getElementById('point4').value;
            }
            for (var i = 0; i < checkboxArray.length; i++) {
                if (checkboxArray[i]!='') {
                
                waypts.push({
                    location: checkboxArray[i],
                    stopover: true
                });
            }
            }
            var request = {
                origin: start,
                destination: end,
                waypoints: waypts,
                optimizeWaypoints: true,
                travelMode: google.maps.TravelMode.DRIVING
            };
            
            geocoder.geocode( { 'address': start}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          document.getElementById('start_lat').value=latitude;
          document.getElementById('start_lon').value=longitude;
          } 
          });

           geocoder.geocode( { 'address': end}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          document.getElementById('end_lat').value=latitude;
          document.getElementById('end_lon').value=longitude;
          } 
          });
          
          geocoder.geocode( { 'address': checkboxArray[0]}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          document.getElementById('point1_lat').value=latitude;
          document.getElementById('point1_lon').value=longitude;
          } 
          });
              
            geocoder.geocode( { 'address': checkboxArray[1]}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          document.getElementById('point2_lat').value=latitude;
          document.getElementById('point2_lon').value=longitude;
          } 
          });
            
              geocoder.geocode( { 'address': checkboxArray[2]}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          document.getElementById('point3_lat').value=latitude;
          document.getElementById('point3_lon').value=longitude;
          } 
          });
              
                geocoder.geocode( { 'address': checkboxArray[3]}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          document.getElementById('point4_lat').value=latitude;
          document.getElementById('point4_lon').value=longitude;
          } 
          });
              
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    var route = response.routes[0];
                    var summaryPanel = document.getElementById('directions_panel');
                    summaryPanel.innerHTML = '';
                    for (var i = 0; i < route.legs.length; i++) {
                        var routeSegment = i + 1;
                        summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment + '</b><br>';
                        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                        summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
                    }
                }
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
</script>