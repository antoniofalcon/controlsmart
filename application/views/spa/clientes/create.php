<div id="divFormularios">
<center><h3>Nuevo Alumno</h3></center><br><br>
<?php $attr= array('id'=>'formCliente'); ?>
<?= form_open("clientes/create",$attr);?>
<?php
	$nombre= array(
		'placeholder' => 'Nombre completo del Alumno :',
		'class' => 'form-control',
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>set_value('txtNombre'));
	$telefono= array(
		'placeholder' => 'Teléfono ejemplo : (6621020202)',
		'class' => 'form-control',
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>set_value('txtTelefono'));
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<?= form_label('Nombre: ','txtNombre');?>
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?><br><br>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<?= form_error('txttelefono'); ?><br><br>
<div id="divBotones">
<?=form_submit($btnEditar,'Guardar'); ?>
</div>
<?=form_close();?>
</div>
