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
<?= form_dropdown('cboNivel',$options,$datos->result()[0]->nivel); ?>
<?= form_error('cboNivel'); ?>
<?=form_submit('','Editar'); ?>
<?=form_close();?>

<style type="text/css">
.error{
	color: red;
}

input{ display: block;}
</style>