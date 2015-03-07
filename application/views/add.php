
    <body>
        <div class="container">
            <div class="tab-content">
                <ul class="nav nav-tabs">
                     <li>
                        <a href="<?php echo site_url('welcome/dashboard')?>" >Dashboard</a>
                     </li>
                     <li  class="active">
                        <a href="<?php echo site_url('welcome/profile')?>" >Profile</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('welcome/message')?>" data-toogle="tab">Message</a>
                     </li>
        </div>
            <div class="row">
                <div class="col-sm-3" style="padding-top: 20px;">
                <div id="accordion" class="panel-group">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse">
                profile information
                </a>
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <ul class="list-group">
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/profile')?>" >Personal information</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/picture')?>" >Photo</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/preferences')?>" >preferences</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/verifications')?>" >verification</a>
                    </li>
                    <li class="list-group-item">
                     <a href="<?php echo site_url('welcome/car')?>" >car</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/address')?>" >address</a>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h4 class="panel-title">
                                Account
                            </h4>
                            </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <ul class="list-group">
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/notification')?>" >notifications</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/password')?>" >password</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/remove')?>" >Delete your account</a>
                    </li>
                    </ul>
                </div>
                </div>
                
                </div>
                
                <div class="col-sm-9 col-md-9">
                    <h3>Your car</h3>
                    <hr style="margin-top: 14px;">
                 
                <!--<div class="panel-body">-->
                            <div class="alert alert-info">
                                <form class="form-horizontal" method="post" action="<?php echo site_url('welcome/upload_it/'.$id)?>" enctype="multipart/form-data" />
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Car model</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="car_model" placeholder="Car model">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">RC Booking image</label>
                                            <div class="col-sm-3">
                                                <input type="file" name="image1" id="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">RC Register Number</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="car_no" placeholder="RC Register Number">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Licence image</label>
                                            <div class="col-sm-3">
                                                <input type="file" name="image2" id="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Car insurance image</label>
                                            <div class="col-sm-3">
                                                <input type="file" name="image3" id="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">        
                                          <div class="col-sm-offset-3 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                        </div>
                                        
                                </form>
                            </div>
 
                    </div>
                </div>
                    
                

        
    </body>
        
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
        </body>
    </html>