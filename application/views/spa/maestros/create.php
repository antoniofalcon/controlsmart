
<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/create",$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>set_value('txtNombre'));
	$direccion= array(
		'name'=>'txtDireccion',
		'id'=>'txtDireccion',
		'value'=>set_value('txtDireccion'));
	$telefono= array(
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>set_value('txtTelefono'));
	?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<br>
<?= form_label('Dirección: ','txtDireccion');?>
<?= form_input($direccion); ?>
<br>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<br>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>
