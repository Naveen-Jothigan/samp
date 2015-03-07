
    <body>
        
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
                    <h3>My notifications </h3>
                    <hr style="margin-top: 14px;">
                 
                 <div id="accordion" class="panel-group">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title"  style="font-size:20px; ">
                
                
SMS notifications/ Sent to <a href="<?php echo ('welcome/profile')?>" data-parent="#accordion" data-toggle="collapse" style="color:#0080ff; ">(edit)</a>

                
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <ul class="list-group">
                    <li class="list-group-item " >
                    <span style="color:gray; font-size:16px ; ">Receive an SMS (for free) when:</span><br>
           
                    
                    <input type="checkbox" id="profile_notifications_sms_notificationSmsNewPrivateThread" name="profile_notifications_sms[notificationSmsNewPrivateThread]" value="1" checked="checked" /><label for="profile_notifications_sms_notificationSmsNewPrivateThread"> &nbsp;&nbsp;
                    a co-traveller first contacts you about your ride offer (free service, only one SMS per passenger)</label>
                    </li>
                    
                    </ul>
                </div></div></div>
                 
                 
                 <div id="accordion" class="panel-group">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title" style="font-size:20px; ">
                
                

Email notifications/ They will be sent to gobi.org09@gmail.com 
 <a href="<?php echo ('welcome/profile')?>" data-parent="#accordion" class="" data-toggle="collapse" style="color:#0080ff; ">(edit)</a>

                
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <ul class="list-group">
                    <li class="list-group-item " >
                    <span style="color:gray; font-size:16px ; ">Receive an email notification when:</span><br>
           
                    
                    
                  <input type="checkbox" id="profile_notifications_email_notificationMailCreateTrip" name="profile_notifications_email[notificationMailCreateTrip]" value="1" checked="checked" />
                  <label for="profile_notifications_email_notificationMailCreateTrip">your ride offer is successfully published</label>
                  <br>
                    <input type="checkbox" id="profile_notifications_email_notificationMailUpdateTrip" name="profile_notifications_email[notificationMailUpdateTrip]" value="1" checked="checked" />
                    <label for="profile_notifications_email_notificationMailUpdateTrip">your ride offer is successfully updated</label>
                      <br>
                    <input type="checkbox" id="profile_notifications_email_notificationMailPrivateMessage" name="profile_notifications_email[notificationMailPrivateMessage]" value="1" checked="checked" />
                    <label for="profile_notifications_email_notificationMailPrivateMessage">you receive a new private message </label>
                      <br>
                    <input type="checkbox" id="profile_notifications_email_notificationMailRatingReminder" name="profile_notifications_email[notificationMailRatingReminder]" value="1" checked="checked" />
                    <label for="profile_notifications_email_notificationMailRatingReminder">you took a recent ride and should exchange ratings with your co-travellers</label>
                      <br>
                    <input type="checkbox" id="profile_notifications_email_notificationMailNewRating" name="profile_notifications_email[notificationMailNewRating]" value="1" checked="checked" />
                    <label for="profile_notifications_email_notificationMailNewRating">you receive a new rating</label>
                          <br>  <br>
                            <span style="color:gray; font-size:16px ; ">Receive an email when:</span><br>
             
                    
                    <input type="checkbox" id="profile_notifications_email_notificationMailNewsletter" name="profile_notifications_email[notificationMailNewsletter]" value="1" checked="checked" />
                    <label for="profile_notifications_email_notificationMailNewsletter">BlaBlaCar has updates on new features, or other useful information for you</label>
 <br>  <br>
                   <span style="color:gray; font-size:16px ; ">   My alerts</span><br>
          
                    <p class="size14">You can get email alerts of new rides available: just use the "email alert" button once you've searched for a ride.
                        <a href="/dashboard/alerts">See my ride alerts</a>
                    </p>
                </div>
                            
                    </li>
                    
                    </ul>
                </div></div></div>
                 
                 
                 
                 
                 
                 
                <!--<div class="panel-body">-->
                  
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
        </body>
    </html>