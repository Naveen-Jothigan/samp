<div class="container pad-2">
    <img class="img-responsive" src="<?php echo site_url('application/assets/images/banner.png')?>">

</div>
<div class="container pad-2">

    <form class="form-inline" method="post" id="index_form" action="<?php echo site_url('welcome/search')?>">
        <div class="form-group">
            <input type="text" class="form-control" id="fn" name="fn" placeholder="source">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="tn" name="tn" placeholder="destination">
        </div>
        <button type="submit" class="btn btn-primary " id="find">Find</button>
    </form>
</div>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&v=3&input=india&types=geocode"></script> 
<script>
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('fn'));
    new google.maps.places.SearchBox(document.getElementById('tn'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});     
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('application/assets/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('application/assets/js/bootstrapValidator.js')?>"></script>
<!--<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#login').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                
                validators: {
                    notEmpty: {
                        message: 'Enter valid username'
                    }
                }
            },
            password: {
                
                validators: {
                    notEmpty: {
                        message: 'Enter valid password'
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
</script>-->
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#index_form').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fn: {
                
                validators: {
                    notEmpty: {
                        message: 'Enter city or state or country'
                    }
                }
            },
            tn: {
                
                validators: {
                    notEmpty: {
                        message: 'Enter city or state or country'
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