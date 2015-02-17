

<?php $attr= array('id'=>'formClienteE'); ?>
<?= form_open("clientes/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->Cliente);
	$telefono= array(
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>$datos->result()[0]->Celular);
	
?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<br>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<br>
<?=form_submit('','Editar'); ?>
<?=form_close();?>
