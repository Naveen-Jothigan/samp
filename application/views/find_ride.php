<style>

    body {
        height: 100px;
    }
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&v=3&input=india&types=geocode"></script>
<script>
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;
    var x = 0;

    
    google.maps.event.addDomListener(window, 'load', function() {
        new google.maps.places.SearchBox(document.getElementById('fn'));
        new google.maps.places.SearchBox(document.getElementById('tn'));
        directionsDisplay = new google.maps.DirectionsRenderer({
            'draggable': true
        });
    });

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var pondicherry = new google.maps.LatLng(11.56, 79.53);
        var mapOptions = {
            zoom: 7,
            center: pondicherry,

        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
    }

    function calcRoute() {
        var waypts = [];
        var checkboxArray = [];
        var start = document.getElementById('fn').value;
        var end = document.getElementById('tn').value;
        var request = {
            origin: start,
            destination: end,
            optimizeWaypoints: true,
            travelMode: google.maps.TravelMode.DRIVING
        };

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
                    var km=route.legs[i].distance.text;
                    var kms=parseFloat(km);
                    var cost=kms*3.50;
                    summaryPanel.innerHTML += '<h1>'+cost +'Rs</h1>';
                }
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
function exchangedata() {
    var from=document.getElementById("fn").value;
    var to=document.getElementById("tn").value;
    document.getElementById("fn").value=to;
    document.getElementById("tn").value=from;
}
</script>
<div class="container pad-2">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row" style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3) inset, -2px -2px 8px rgba(0, 0, 0, 0.3) inset; background: red; padding: 10px">
                <h5>Find Ride</h5>
                <form action="<?php echo site_url('welcome/search') ?>" method="post" id="find_ride">
                    <input type="text" id="fn" name="fn" onchange="calcRoute()">
                    <button type="button" class="btn btn-primary" onclick="exchangedata()">switch</button>
                    <input type="text" id="tn" name="tn" onchange="calcRoute()">
                    <button type="submit" class="btn btn-primary btn-sm">Find</button>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<div id="map-canvas" class="container" style="height:300%;border: 2px solid #035B97"></div>
<div id="directions_panel" class="container" style="height:150%;border: 2px solid #035B97"">
    <h4>3.50 <img src="<?php echo site_url('application/assets/images/rupee_symbol.png')?>">/km</h4>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('application/assets/js/bootstrapValidator.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#find_ride').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         fields: {
            fn: {
                
                validators: {
                    notEmpty: {
                        message: 'Enter city or state or country'
                    }
                }
            },
            tn: {
                
                validators: {
                    notEmpty: {
                        message: 'Enter city or state or country'
                    }
                }
            },
        }
    });

});
</script>
</body>
</html>