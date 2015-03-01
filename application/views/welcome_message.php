<?php $attr= array(
	'id'=>'formLogin',
	'class'=>'form-horizontal"'
); ?>

<div id="divLogin" class="col-sm-5">
	<h3 class="headers">Iniciar Sesión</h3>
<?= form_open("/Acceso/login",$attr);?>
<?php
	$cuenta= array(
		'name'=>'txtCuenta',
		'id'=>'txtCuenta',
		'value'=>set_value('txtCuenta'),
		'class'=>'form-control',
		'placeholder'=>'Usuario');
	$pswd= array(
		'name'=>'txtPassword',
		'id'=>'txtPassword',
		'value'=>set_value('txtPassword'),
		'class'=>'form-control',
		'placeholder'=>'Contraseña');	
	$btnAttr= array(
		'content'=>'Entrar',
		'type'=>'submit',		
		'class'=>'btn btn-success btn-block');
	$btnAttr2= array(
		'content'=>'Salir',
		'type'=>'submit',		
		'class'=>'btn btn-danger btn-lg btn-block');
?>
<?= form_input($cuenta); ?>
<br>
<?= form_input($pswd); ?>
<br>
<?=form_button($btnAttr); ?>
<!--<?=form_button($btnAttr2); ?>-->
<?=form_close();?>
</div>
<style type="text/css">
	body{
		background-color: #FAFAFA;
		padding-top: 100px;
	}
	#divLogin{
		background-color: #fff;
		padding: 5px 30px 30px 30px;
		border-radius: 8px;
		border: 1px solid rgba(8, 8, 8, 0.12);
		z-index: 200px;	
	}
	#divLogin input{
		
		padding: 20px;
		font-size: 17px;
		
	}
	#divLogin button{
		
		padding: 10px;
		
	}
	#divLogin .headers{
		color: #208884;
	}
</style>