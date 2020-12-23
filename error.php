<?php require_once("includes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>Cholan Tours : Online Booking</title>
	<?= $inc->styles(); ?>
	<style>
	.content {background-color:#f0f0f0; min-height:300px; }
    h4 {font:400 20px  'Open Sans', sans-serif; letter-spacing:-1px; margin-bottom:1em; line-height:50px;}
	</style>
</head>

<body>
<div class="wrapper"> 
	<?= $inc->main_header(); ?> 
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="form-title text-center alert-danger">
                    <h4><i class="fa fa-exclamation-triangle"></i> Invalid Operation !  Internal Server Error !</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Unfortunately, something has gone wrong.</h4>
                <p>We're unable to fulfill your request. Rest assured we have been notified and are looking into the issue. <br />
                If the error continues, please contact our support team. </p>
			    <p>
                    No: 5, Annai Avenue, Vasanth Nagar Extn., <br />
                    Kollidakarai, Srirangam, Trichy, <br />
                    Tamil Nadu, Pincode - 620 006. <br />
                    Ph: +91 431 4226122.
                </p>
			</div>
        </div>
	</div>
</div>
</body>
</html>
<?= $inc->script_section(); ?>