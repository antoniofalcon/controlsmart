<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ControlSmart</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    <link href="/controlsmart/assets/vendor/css/style.css" rel="stylesheet">

<script type="text/javascript">

$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","210px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","260px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","210px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","260px");
	});
});
</script>

</head>
<body>
<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
	
	<form name="login-form" class="login-form" action="" method="post">
	    <div class="header">
			<center><h1>Bienvenido a ControlSmart</h1></center>
	    </div>
    <div class="content">
<?php $attr= array(
	'id'=>'formLogin',
	'class'=>'form-horizontal"'
); ?>

<?=form_open("/acceso/login",$attr);?>
<?php
	$cuenta= array(
		'name'=>'txtCuenta',
		'id'=>'txtCuenta',
		'value'=>set_value('txtCuenta'),
		'class'=>'input username',
		'placeholder'=>'Usuario');
	$pswd= array(
		'name'=>'txtPassword',
		'id'=>'txtPassword',
		'value'=>set_value('txtPassword'),
		'class'=>'input password',
		'placeholder'=>'Contraseña');	
	$btnAttr= array(
		'content'=>'Entrar',
		'type'=>'submit',		
		'class'=>'button');
?>
<?= form_input($cuenta); ?>
<?= form_input($pswd); ?>
</div>
<div class="footer">
<?=form_button($btnAttr); ?>
 </div>
 </form>
 </div>
	<div id="logologin">
	</div>
</body>
</html>
<!--<?=form_button($btnAttr2); ?>-->
<!--<?=form_close();?>
    

    

