<div class="container pad-2">
        <div class="row" style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3) inset, -2px -2px 8px rgba(0, 0, 0, 0.3) inset; background: red; padding: 10px">
                <h5>Find Ride</h5>
                <form class="form-inline" method="post" action="<?php echo site_url('welcome/search')?>">
                <div class="form-group">
                <label for="from"></label>
                <input type="text" class="form-control" name="fn" id="fn" placeholder="from">
                </div>
                <button type="button" id="switch" class="btn btn-primary" onclick="exchangedata()">Switch</button>
                <div class="form-group">
                <label for="to"></label>
                <input type="text" class="form-control" name="tn" id="tn" placeholder="to">
                </div>
                <div class="form-group">
                <label for="to"></label>
                <input type="text" class="form-control" id="date" name="date" placeholder="date">
                </div>  
                <div class="form-group">
                <select class="form-control" name="time" placeholder="Depature point">
                                        <option value="" selected="selected"></option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
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
                </div>
                <!-- <div class="form-group">-->
                <!--<select class="form-control" name="destinct_time" >-->
                <!--                        <option value="" selected="selected"></option>-->
                <!--                        <option value="0">00</option>-->
                <!--                        <option value="1">01</option>-->
                <!--                        <option value="2">02</option>-->
                <!--                        <option value="3">03</option>-->
                <!--                        <option value="4">04</option>-->
                <!--                        <option value="5">05</option>-->
                <!--                        <option value="6">06</option>-->
                <!--                        <option value="7">07</option>-->
                <!--                        <option value="8">08</option>-->
                <!--                        <option value="9">09</option>-->
                <!--                        <option value="10">10</option>-->
                <!--                        <option value="11">11</option>-->
                <!--                        <option value="12">12</option>-->
                <!--                        <option value="13">13</option>-->
                <!--                        <option value="14">14</option>-->
                <!--                        <option value="15">15</option>-->
                <!--                        <option value="16">16</option>-->
                <!--                        <option value="17">17</option>-->
                <!--                        <option value="18">18</option>-->
                <!--                        <option value="19">19</option>-->
                <!--                        <option value="20">20</option>-->
                <!--                        <option value="21">21</option>-->
                <!--                        <option value="22">22</option>-->
                <!--                        <option value="23">23</option>-->
                <!--                    </select>-->
                <!--</div>-->
                <button type="submit" class="btn btn-primary">Find</button>
               </form>
    </div>
</div>
<div class="container pad-1">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
    <table>
    <tr>
        <td>Ride offered</td>
        
    </tr>    
    </table>
    </h3>
  </div>
  <div class="panel-body">
    <?php
foreach($results as $value)

{
    $id=$value->id;
    $sql=mysql_query("select * from profile where id='$id'");
    $row=mysql_fetch_array($sql);
    $model=$row['car_model'];
  
?>

    <div class="row">
        <div class="col-md-3">
            <img style="height: 130px" class="img-responsive" src="<?php echo site_url('application/assets/images/banner.png')?>">
                
                <?php  if($value->pref_smoke != '') { ?>
                <img src="<?php echo site_url('application/assets/images/smoke-allow.png')?>">
                <?php } else { ?>
                <img src="<?php echo site_url('application/assets/images/no-smoke.png')?>">
                <?php } 
                if($value->pref_music != '') { ?>
                <img src="<?php echo site_url('application/assets/images/music-allow.png')?>">
                <?php } else{ ?>
                <img src="<?php echo site_url('application/assets/images/no-music.png')?>">
                <?php }
                if($value->pref_pet != '') { ?>
                <img src="<?php echo site_url('application/assets/images/pets-allow.png')?>">
                <?php }else{ ?>
                <img src="<?php echo site_url('application/assets/images/no-pets.png')?>">
                <?php }
                if($value->ladies_only != '') { ?>
                <img src="<?php echo site_url('application/assets/images/ladies.jpg')?>">
                <?php }else{ ?>
                <img src="<?php echo site_url('application/assets/images/no-ladies.jpg')?>">
                <?php }
                ?>
        
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h4><?php echo $value->start_date; ?></h4>
            <h6>start time:<?php echo $value->start_time; ?> O'clock</h6>
            <h4><?php echo $value->depature_text ; ?>&rarr;<?php echo $value->destin_text ; ?></h4>
            <p><img src="<?php echo site_url('application/assets/images/marker-green-small.png')?>"><?php echo $value->depature_text; ?></p>
            <p><img src="<?php echo site_url('application/assets/images/marker-red-small.png')?>"><?php echo $value->destin_text ; ?></p>
            <p>Car Model:<?php echo $model;?></p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <h3><strong style="color: #029F5A"><?php echo $value->price ?></strong><img src="<?php echo site_url('application/assets/images/rupee_symbol.png')?>"><span>per passenger</span></h3>
            <h4><span>Seat left:</span><strong style="color: #029F5A"><?php echo $value->no_seat ?></strong></h4>
        </div>
    </div>
    <hr>
    <?php

}
    ?>
    <p><?php echo $str_links; ?></p>
  
  </div>
</div>
</div>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&v=3&input=india&types=geocode"></script> 
<script>
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('fn'));
    new google.maps.places.SearchBox(document.getElementById('tn'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});     
</script>
<script>
function exchangedata() {
    var from=document.getElementById("fn").value;
    var to=document.getElementById("tn").value;
    document.getElementById("fn").value=to;
    document.getElementById("tn").value=from;
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('application/assets/js/bootstrapValidator.js')?>"></script>
<script type="text/javascript">
$(document).ready(function () {
$('#date').datepicker({  });
});
</script>

</body>

</html>