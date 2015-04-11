<div id="divFormularios">
<center><h3>Eliminar Alumno</h3></center><br><br>
<?php $attr= array('id'=>'formClienteD'); ?>
<?= form_open("clientes/delete/".$id,$attr);?>

<center><?= form_label('Alumno: ','txtNombre');?><br>
<?= form_label($datos->result()[0]->cliente);?><br><br>

<?= form_label('Teléfono: ','txtTelefono');?><br>
<?= form_label($datos->result()[0]->celular)?><br><br>
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
<?=form_submit($btnEditar,'Borrar'); ?>
<?=form_close();?>
</div>
</div>