<div id="divFormularios">
<center><h3>Eliminar Usuario</h3></center>
<?php $attr= array('id'=>'formUsuario'); ?>
<br><br><br>
<?php
$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<?= form_open("acceso/delete/".$id,$attr);?>
<center>
<?= form_label('Nombre: ','txtNombre');?><br>
<?= form_label($datos->result()[0]->usuario)?><br>
<br>
<?= form_label('Cuenta: ','txtCuenta');?><br>
<?= form_label($datos->result()[0]->cuenta)?><br>
<br>
</center>
<div id="divBotones">
<?=form_submit($btnEditar,'Borrar'); ?>
<?=form_close();?>
</div>
</div>
