<div id="divFormularios">
<center><h3>Editar Alumno</h3></center><br><br>
<?php $attr= array('id'=>'formClienteE'); ?>
<?= form_open("clientes/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'placeholder' => 'Nombre completo del Alumno :',
		'class' => 'form-control',
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->cliente);
	$telefono= array(
		'placeholder' => 'Teléfono ejemplo : (6621020202)',
		'class' => 'form-control',
		'name'=>'txtTelefono',
		'id'=>'txtTelefono',
		'value'=>$datos->result()[0]->celular);
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
<?= form_error('txtTelefono'); ?><br><br>
<div id="divBotones">
<?=form_submit($btnEditar,'Editar'); ?>
</div>
<?=form_close();?>
</div>
