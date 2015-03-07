
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>touktoukcar</title>
    <link href="<?php echo site_url('application/assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('application/assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('application/assets/css/bootstrapValidator.css')?>"/>  
    <link href="<?php echo site_url('application/assets/css/date-picker.css')?>" rel="stylesheet">
    </head>
    <body style="border-top: 2px solid #035B97">
    <div class="container">
        <div class="page-header">
        <div class="row">
            <img class="img-responsive" src="<?php echo site_url('application/assets/images/logo.jpg')?>"
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <a href="">
            <img id="facebook" src="<?php echo site_url('application/assets/images/facebook-connect.png')?>">
            </a>
        </div>
        <div class="row text-center">
            
            <a href=""><img src="<?php echo site_url('application/assets/images/google-login-button-asif18.png')?>"></a>
        </div>
    </div>
    <div class="container">
        <form id="sign_up" action="<?php echo site_url('welcome/new_user_register')?>" method="post">
        <div class="row">
        <div class="form-group col-md-4">
        <label for="Firstname">Firstname</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="Lastname">Lastname</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="Lastname">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"><?php echo '<script>alert($msg)</script>'; ?>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-md-4">
        <label for="gender">gender</label>
        <div class="radio">
        <label>
        <input type="radio" name="gender" id="male" value="male">
        Male
        </label><br/>
        <label>
        <input type="radio" name="gender" id="female" value="female">
        Female
        </label>
        </label>
        </div>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-md-4">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="conform_password">conform Password</label>
        <input type="password" class="form-control" id="conform_password" name="conform_password" placeholder="conform password">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="dob">Data of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob" placeholder="Data of Birth">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo site_url('application/assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo site_url('application/assets/js/date-picker.js')?>"></script>
    <script type="text/javascript" src="<?php echo site_url('application/assets/js/bootstrapValidator.js')?>"></script>


<script type="text/javascript">
$(document).ready(function() {
$('#dob').datepicker({});
});
</script>
    
    <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#sign_up').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
                group: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastname: {
                group: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            conform_password: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            dob: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'The birthday is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
  </body>
</html>