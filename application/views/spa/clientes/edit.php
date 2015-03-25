

<?php $attr= array('id'=>'formClienteE'); ?>
<?= form_open("clientes/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->cliente);
	$telefono= array(
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>$datos->result()[0]->celular);
	
?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<?= form_error('txtTelefono'); ?>
<?=form_submit('','Editar'); ?>
<?=form_close();?>
