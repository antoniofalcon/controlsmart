<div id="divFormularios">
<center><h3>Nuevo Usuario</h3></center>
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
		'placeholder' => 'Nombre completo del Usuario :',
		'class' => 'form-control',
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>set_value('txtNombre'));
	$cuenta= array(
		'placeholder' => 'Cuenta de Usuario :',
		'class' => 'form-control',
		'name'=>'txtCuenta',
		'id'=>'txtCuenta',
		'value'=>set_value('txtCuenta'));
	$pswd= array(
		'placeholder' => 'Password mayor a 6 digitos :',
		'class' => 'form-control',
		'name'=>'txtPswd',
		'id'=>'txtPswd',
		'value'=>set_value('txtPswd'),
		'type'=>'password');
	$cPswd= array(
		'placeholder' => 'Confirmar Password :',
		'class' => 'form-control',
		'name'=>'txtCPswd',
		'id'=>'txtCPswd',
		'value'=>set_value('txtCPswd'),
		'type'=>'password');
	$options= array(
			''=>'Seleccione el Nivel del Usuario',
			'1'=>'Administrador',
			'2'=>'Usuario'
		);
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
	$cboEstilo = array(
		'class' => 'form-control'
		);

?>
<?php 
	//se hacen los llamados a los métodos para construir el formulario y se le pasan las propiedades 
	//form_close() sirve para cerrar la etiqueta del formulario. ejemplo </form>
 ?>
<!--<?= form_label('Nombre: ','txtNombre');?> -->
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?><br>
<!--<?= form_label('Cuenta: ','txtCuenta');?>-->
<?= form_input($cuenta); ?>
<?= form_error('txtCuenta'); ?><br>
<!--<?= form_label('Contraseña: ','txtPswd');?>-->
<?= form_input($pswd); ?>
<?= form_error('txtPswd'); ?><br>
<!--<?= form_label('Confirmar Contraseña: ','txtCPswd');?>-->
<?= form_input($cPswd); ?>
<?= form_error('txtCPswd'); ?><br>
<!--<?= form_label('Nivel: ');?>-->
<?= form_dropdown('cboNivel',$options); ?>
<?= form_error('cboNivel'); ?>
<div id="divBotones">
<?=form_submit($btnEditar,'Guardar'); ?>
<?=form_close();?>
</div>
<style type="text/css">
.error{
	color: red;
}

input{ display: block;}
</style>

</div>