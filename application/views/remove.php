   
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
                </div>
                </div>
                
                </div>
                
                <div class="col-sm-9 col-md-9">
                    <h3>Delete your account</h3>
                    <hr style="margin-top: 14px;">
                    If you would like to delete your account because you weren't able to solve a problem, please allow us to suggest some tips that may be of use:
                    
                    <ul>
                        <li>To change your phone number or your email address, you can edit your profile.</li>
                        <li>To hide your phone number, you can edit your profile.</li>
                        <li>To resolve a technical issue, please contact us.</li>
                        <li>To stop receiving emails, you can edit your notifications.</li>
                        <li>To deal with a rating that you feel is unjustified, please contact us (if this is the case, do not delete your account -- you will not be able to create a new account).</li>
                    </ul>
                    If you still want to delete your account, please help us improve our service by letting us know why. 
                    
                    
                    
                <!--<div class="panel-body">-->
                   <div class="alert alert-info">
                    
                    
                <form class="form-horizontal" role="form">
                
                <div class="form-group">
                    <div class="col-sm-3">
                       <label class=" control-label">Reason:</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <select id="user_unsubscribe_reason" name="user_unsubscribe[reason]"  class="form-control" required="required">
                        <div class="col-sm-3">
                        <option value="" class="form-control" selected="selected">Choose</option>
                        </div>
                     
                        <option class="form-control" value="0">I've moved and don't share rides anymore</option>
                      
                        <option class="form-control" value="1">I didn't find what I was looking for and see no reason for keeping my account</option>
                        <option class="form-control" value="2">I receive too many calls or emails</option>
                        <option class="form-control" value="3">I wanted to try car sharing but it’s not for me</option>
                        <option value="4" class="form-control">I have found a regular car share so I don't need the site any more</option>
                        <option class="form-control" value="5">I had the impression that I had to pay to use the site</option>
                        <option class="form-control" value="6">No problem, the site is brilliant</option>
                        <option class="form-control" value="7">I have another account and I want to delete this one</option>
                        <option class="form-control" value="8">No one contacted me about the ride I offered</option>
                        <option value="9" class="form-control">I've encountered a technical issue blocking me</option>
                        <option value="10" class="form-control">Other reason</option></select>
                </div></div>
                 <div class="form-group">       
                    <div class="col-sm-5">                        
                        <label class=" control-label ">Would you recommend BlaBlaCar?</label>
                    </div></div>
                  <div class="form-group">   
                    <div class="col-sm-3">
                        <select id="user_unsubscribe_recommend" name="user_unsubscribe[recommend]" class="form-control" required="required">
                        <option value="" selected="selected">Choose</option><option class="form-control" value="1">Yes fyhdfhfghsgshhfsdhg</option><option class="form-control" value="0">No</option></select>
                    </div>
                 </div>
                        
                  <div class="form-group">
                    <div class="col-sm-3">
                        <label  class=" control-label ">What could we improve?</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                        <textarea id="user_unsubscribe_comment" name="user_unsubscribe[comment]" class="form-control" required="required"></textarea>
                 </div>
                 </div>
                  <div class="form-group">
                    <div class="col-sm-3">
                   <button type="submit"  >Delete this account</button>
                   </div>
                 </div>
                </form>

            
            
            
                   </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        

        </body>
    </html>