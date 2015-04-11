<div id="divFormularios">
<center><h3>Eliminar Alumno</h3></center><br>
<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/delete/".$id,$attr);?>
<center>
<?= form_label('Nombre: ','txtNombre');?><br>
<?= form_label($datos->result()[0]->maestro);?><br><br>

<?= form_label('Dirección: ','txtDireccion');?><br>
<?= form_label($datos->result()[0]->direccion)?><br><br>

<?= form_label('Teléfono: ','txtTelefono');?><br>
<?= form_label($datos->result()[0]->telefono)?><br>
</center>
<?php
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<br>
<div id="divBotones">
<?=form_submit($btnEditar,'Eliminar'); ?>
<?=form_close();?>
</div>
</div>