<?php $attr= array('id'=>'formCliente'); ?>
<?= form_open("clientes/create",$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>set_value('txtNombre'));
	$telefono= array(
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>set_value('txtTelefono'));
?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<?= form_error('txttelefono'); ?>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>
