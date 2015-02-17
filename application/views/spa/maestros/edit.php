<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->Maestro);
	$direccion= array(
		'name'=>'txtDireccion',
		'id'=>'txtDireccion',
		'value'=>$datos->result()[0]->Direccion);
	$telefono= array(
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>$datos->result()[0]->Telefono);
	
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
<?=form_submit('','Editar'); ?>
<?=form_close();?>
