<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>touktoukcar</title>
    <link href="<?php echo site_url('application/assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('application/assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('application/assets/css/date-picker.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('application/assets/css/bootstrapValidator.css')?>"/>  
</head>

<body style="border-top: 2px solid #035B97">
    <div class="container">
        <div class="row pad-2">
            <div class="col-md-4">
                <img src="<?php echo site_url('application/assets/images/logo.jpg')?>">
            </div>
            <div class="col-md-4 pad-3">
                <a class="btn btn-primary" href="<?php echo site_url('welcome/find_ride');?>">Find a Ride</a>
                <a class="btn btn-warning" href="<?php echo site_url('welcome/offer_ride');?>">Offer a Ride</a>
                
            </div>
            <div class="col-md-4 pad-4">
                <div class="dropdown">
                    <a class="dropdown-toggle" id="menu1" data-toggle="dropdown">
                        <?php echo $email; ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('welcome/dashboard');?>">Dashboard</a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('welcome/find_ride');?>">Rides Offered</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('welcome/message');?>">Message</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('welcome/profile');?>">Profile</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('welcome/logout');?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>