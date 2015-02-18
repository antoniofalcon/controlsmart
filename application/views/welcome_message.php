<?php $attr= array(
	'id'=>'formLogin',
	'class'=>'form-horizontal"'
); ?>
<br><br><br><br>
<div id="divLogin" class="col-sm-5">
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
<br>
</div>