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
<br>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<br>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>
