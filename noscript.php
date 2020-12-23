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
	body {font:400 15px arial; background-color:#3c8dbc;}
	.wrapper {height:100%; margin:0 4em; background:#fff; box-shadow:0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08);}
	.center-block {margin:0 auto; padding:10px;}
	p {font:400 15px 'opensans', arial; color:#333; text-align:justify; line-height:1.5em; margin-bottom:1em;}
	.content {background-color:#f0f0f0; min-height:300px;}
	.form-title {background-color:#fff; height:50px; line-height:50px; border-bottom: 1px solid #dedede;}
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
                    <h4><i class="fa fa-exclamation-triangle"></i> Enable Javascript in your Browser !</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Dear User ! <br />
                For further proceed please enable your javascript in the web browser. <br />
                Click here for help <a href="https://www.enable-javascript.com/" target="_blank"> Online Tutorial.</a></h4>
            </div>
        </div>     
    </div>
</div>
</body>
</html>
<?= $inc->script_section(); ?>