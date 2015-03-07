<?php
foreach($results as $row1)
{
    $name=$row1->p_email;
    $status=$row1->status;
}
?>
        <div class="container pad-2">
            <div class="tab-content">
                <ul class="nav nav-tabs">
                      <li  class="active">
                        <a href="<?php echo site_url('welcome/dashboard')?>">Dashboard</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('welcome/profile')?>">Profile</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('welcome/message')?>">Message</a>
                     </li>
                </ul>     
        </div>
            <div class="row">
                <div class="col-sm-12" style="padding-top: 20px;">
                 <div class="alert alert-info">
                    <img class="img-responsive" src="<?php echo site_url('application/assets/images/user.jpg')?>" alt="user"/>
                 
                </div>
            </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <h4>Car share preferences</h4><br>
                            <a href="dashboard.php">&rarr; Edit your car share preferences</a>
                            <hr>
                            <h4>Member Verification</h4>
                            <div class="verified-img">
                            
                            <span class="pnumber" style="color: #ffba75; font-size: large;" data-toggle="tooltip" data-placament="top" title="All good! This phone number has been verified.">
                                    Phone number verified
                            </span>
                            </div><br>
                            <div class="verified-img">
                            <?php
                            if($status)
                            {
                            ?>
                            <img src="<?php echo site_url('application/assets/images/success-icon.png')?>" alt="icon"/>
                            <?php }else{ ?>
                            <img src="<?php echo site_url('application/assets/images/not_verify.jpg')?>" alt="icon"/>
                            <?php } ?>
                            <span class="pnumber" style="color: #ffba75; font-size: large;" data-toggle="tooltip" data-placament="top" title="Your email hasn't been verified yet :(">
                                    E-mail Id
                            </span>
                            </div>
                            </div>
                        </div>
                </div>
                <div class="col-sm-8">
                    <h3>Notifications</h3>
                   <div class="alert alert-info">
                        <p>Tell us how you learned about Toukcar </p>
                   </div>
                    </div>
                </div>
                    
                </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
        </body>
    </html>