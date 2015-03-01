<?php $attr= array('id'=>'formUsuario'); ?>
<br><br><br>
<?= form_open("acceso/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->usuario);
	$cuenta= array(
		'name'=>'txtCuenta',
		'id'=>'txtCuenta',
		'value'=>$datos->result()[0]->cuenta);
	$pswd= array(
		'name'=>'txtPswd',
		'id'=>'txtPswd',
		'value'=>'',
		'type'=>'password');
	$cPswd= array(
		'name'=>'txtCPswd',
		'id'=>'txtCPswd',
		'value'=>'',
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
<?=form_submit('','Editar'); ?>
<?=form_close();?>