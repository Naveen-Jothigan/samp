
        <div class="container">
            <div class="tab-content">
                <ul id="myTab" class="nav nav-tabs">
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
                </div></div></div>
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
                </div></div>
                
                </div>
                
                <div class="col-sm-9 col-md-9">
                    <h3>Change Password</h3>
                    <hr style="margin-top: 14px;">
                 
                <!--<div class="panel-body">-->
                   <div class="alert alert-info">
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('welcome/change_password/'.$id)?>">
                
                <div class="form-group">
                    <label class="control-label col-sm-4">Current Password</label>
                    <div class="col-sm-3">
                    <input type="password" class="form-control" id="current_password" name="current_password">
                     </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4">New Password</label>
                    <div class="col-sm-3">
                <input type="password" class="form-control" id="new_password" name="new_password">
                </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-4">Confirm New Password</label>
                  <div class="col-sm-3">
                   <input type="password" class="form-control" id="conform_password" name="conform_password">
                  </div>
                </div>
               
                
                <div class="form-group">        
                  <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn btn-primary">save</button>
                  </div>
                </div>
            </form>
                   </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        
   
        
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
              <script src="js/bootstrap.js"></script>
              <script src="js/bootstrap.min.js"></script>
        </body>
    </html>