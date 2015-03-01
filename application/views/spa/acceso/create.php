<?php $attr= array('id'=>'formUsuario'); ?>
<br><br><br>
<?= form_open("acceso/create",$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>set_value('txtNombre'));
	$cuenta= array(
		'name'=>'txtCuenta',
		'id'=>'txtCuenta',
		'value'=>set_value('txtCuenta'));
	$pswd= array(
		'name'=>'txtPswd',
		'id'=>'txtPswd',
		'value'=>set_value('txtPswd'),
		'type'=>'password');
	$cPswd= array(
		'name'=>'txtCPswd',
		'id'=>'txtCPswd',
		'value'=>set_value('txtCPswd'),
		'type'=>'password');
	$options= array(
			'1'=>'Administrador',
			'2'=>'Usuario',
		);

?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<br>
<?= form_label('Cuenta: ','txtCuenta');?>
<?= form_input($cuenta); ?>
<br>
<?= form_label('Contraseña: ','txtPswd');?>
<?= form_input($pswd); ?>
<br>
<?= form_label('Confirmar Contraseña: ','txtCPswd');?>
<?= form_input($cPswd); ?>
<br>
<?= form_label('Nivel: ');?>
<?= form_dropdown('cboNivel',$options); ?>
<br>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>
