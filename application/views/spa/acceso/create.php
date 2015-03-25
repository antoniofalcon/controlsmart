<?php 
	//se genera un arreglo con las propiedades del formulario 
 	$attr= array('id'=>'formUsuario');

 	//form_open() sirve para crear el formulario 
 	//ejemplo: <form method="POST" action="acceso/create" id="formUsuario">
?>
<?= form_open("acceso/create",$attr);?>
<?php
//se genera un arreglo con las propiedades de cada input.
//de está manera trabaja el helper de CI para formularios.
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
			''=>'seleccione',
			'1'=>'Administrador',
			'2'=>'Usuario'
		);

?>
<?php 
	//se hacen los llamados a los métodos para construir el formulario y se le pasan las propiedades 
	//form_close() sirve para cerrar la etiqueta del formulario. ejemplo </form>
 ?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?>
<?= form_label('Cuenta: ','txtCuenta');?>
<?= form_input($cuenta); ?>
<?= form_error('txtCuenta'); ?>
<?= form_label('Contraseña: ','txtPswd');?>
<?= form_input($pswd); ?>
<?= form_error('txtPswd'); ?>
<?= form_label('Confirmar Contraseña: ','txtCPswd');?>
<?= form_input($cPswd); ?>
<?= form_error('txtCPswd'); ?>
<?= form_label('Nivel: ');?>
<?= form_dropdown('cboNivel',$options); ?>
<?= form_error('cboNivel'); ?>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>

<style type="text/css">
.error{
	color: red;
}

input{ display: block;}
</style>