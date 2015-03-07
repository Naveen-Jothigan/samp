<?php
foreach($results as $row1)
{
    $id=$row1->id;
    $fname=$row1->p_fname;
    $lname=$row1->p_lname;
    $email=$row1->p_email;
    $birth=$row1->birthyear;
    $govt_image=$row1->govtprof_img;
    $mobile=$row1->mobile;
    $comments=$row1->comments;
}

?>
     
        <div class="container pad-2">
            <div class="tab-content">
                <ul id="myTab" class="nav nav-tabs">
                     <li>
                        <a href="<?php echo site_url('welcome/dashboard')?>">Dashboard</a>
                     </li>
                     <li  class="active">
                        <a href="<?php echo site_url('welcome/profile')?>">Profile</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('welcome/message')?>">Message</a>
                     </li>
                     
        </div>
            <div class="row">
                <div class="col-sm-3 pad-2">
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
                    <a href="<?php echo site_url('welcome/password')?>">password</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo site_url('welcome/remove')?>" >Delete your account</a>
                    </li>
                    </ul>
                </div></div>
                
                </div>
                
                <div class="col-sm-9 col-md-9">
                    <h3>Your personal information</h3>
                    <hr style="margin-top: 14px;">
                 
                <!--<div class="panel-body">-->
                   <div class="alert alert-info">
            <form class="form-horizontal" method="post" action="<?php echo site_url('welcome/update/'.$id)?>" role="form">
                
                <div class="form-group">
                    <label class="control-label col-sm-2">First name</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>" >
                     </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Last name</label>
                    <div class="col-sm-3">
                <input type="text" class="form-control" name="lname"  value="<?php echo $lname;?>">
                </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2">Email</label>
                  <div class="col-sm-5">
                   <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2">Mobile phone</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control" name="phone" value="<?php echo $mobile;?>">
                  </div>
                </div>               

                <div class="form-group">
                  <label class="control-label col-sm-2">Birth year</label>
                 <div class="col-sm-3">
                   <input type="text" class="form-control" name="dob" id="dob" value="<?php echo $birth;?>">
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-sm-2">Mini bio</label>
                <div class="col-sm-5">
                <textarea class="form-control" rows="3" name="comment" value="<?php echo $comments;?>"></textarea>
                 </div>
                 </div>
                 <div class="form-group">
                     <label class="control-label col-sm-2">Govt Proof</label>
                     <div class="col-sm-3">
                        <select class="form-control" name="govt_prof">
                           <option value="">Select</option>
                           <option value="Aadhar">Aadhar</option>
                           <option value="License">Licence</option>
                           <option value="PanCard">PanCard</option>
                           <option value="VoterId">VoterId</option>
                       </select>
                 </div>
                 <div class="col-sm-3">
                    <input type="file" name="govt_proof">
                 </div>
                 
                 </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
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
<script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#dob').datepicker({});
});
</script>

        </body>
    </html>