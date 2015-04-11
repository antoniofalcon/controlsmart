<div id="divFormularios">
<center><h3>Agregar Maestro</h3></center>
<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/create",$attr);?>
<?php
	$nombre= array(
		'placeholder' => 'Nombre completo del Maestro:',
		'class' => 'form-control',
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>set_value('txtNombre'));
	$direccion= array(
		'placeholder' => 'Calle, Número y Colonia :',
		'class' => 'form-control',
		'name'=>'txtDireccion',
		'id'=>'txtDireccion',
		'value'=>set_value('txtDireccion'));
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
<?= form_error('txtNombre'); ?><br>
<?= form_label('Dirección: ','txtDireccion');?>
<?= form_input($direccion); ?>
<?= form_error('txtDireccion'); ?><br>
<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_input($telefono); ?>
<?= form_error('txtTelefono'); ?>
<div id="divBotones">
<?=form_submit($btnEditar,'Guardar'); ?>
<?=form_close();?>
</div>
</div>