
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
                    <h3>Member verification</h3>
                    <hr style="margin-top: 14px;">
                 
                <!--<div class="panel-body">-->
        <div class="alert alert-info">
            <form method="post" action="" class="form-horizontal" role="form">
                    <div class="form-container profile-box padding">
                                <section class="verifications-zone">
                                    <h3 class="verifications-title">Email: not verified</h3>
                        
                                    <div class="verifications-content dark-gray">
                                        <p>Your email address is:  (<a href="general.php">edit</a>)</p>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Verify this email">
                                    </div>
                                </section>
                        
                                <section class="verifications-zone">
                                            <h3 class="verifications-title">Phone: not verified</h3>
                                            
                                     <div class="verifications-content dark-gray">
                                            <p>Your phone number is: <strong></strong> (<a href="general.php">edit</a>)</p>
                                            
                                        <input type="submit" name="submit" class="btn btn-primary" value="Verify this number">
                                     </div>
                                </section>
                     </div>
            </form>
        </div>
            
                   </div>
                    </div>
                </div>
                                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
              <script src="js/bootstrap.js"></script>
              <script src="js/bootstrap.min.js"></script>
        </body>
    </html>