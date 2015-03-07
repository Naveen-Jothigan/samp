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
                <a href="<?php echo site_url('welcome/index')?>"><img src="<?php echo site_url('application/assets/images/logo.jpg')?>"></a>
            </div>
            <div class="col-md-4 pad-3">
                <a class="btn btn-primary" href="<?php echo site_url('welcome/find_ride');?>">Find a Ride</a>
                <a class="btn btn-warning" href="<?php echo site_url('welcome/offer_ride');?>">Offer a Ride</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 pad-4">
                <a href="<?php echo site_url('welcome/sign_up')?>">sign up</a> |
                <a href="" data-toggle="modal" data-target="#myModal">login</a>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Touktoukcar</h4>
                            </div>
                            <form action="<?php echo site_url('welcome/login')?>" method="post" id="login">
                                <div class="modal-body">
                                    <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="user email">
                                    </div>
                                    <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="user password">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">login</button>
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
