<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->maestro);
	$direccion= array(
		'name'=>'txtDireccion',
		'id'=>'txtDireccion',
		'value'=>$datos->result()[0]->direccion);
	$telefono= array(
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>$datos->result()[0]->telefono);
	
?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?>
<?= form_label('Dirección: ','txtDireccion');?>
<?= form_input($direccion); ?>
<?= form_error('txtDireccion'); ?>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<?= form_error('txtTelefono'); ?>
<?=form_submit('','Editar'); ?>
<?=form_close();?>
