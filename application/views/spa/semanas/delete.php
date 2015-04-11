<div id="divFormularios">
<center><h3>Eliminar Semana</h3></center><br>
<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/delete/".$id,$attr);?>
<center>
<?= form_label('Semana: ','txtSemana');?><br>
<?= form_label($datos->result()[0]->semana);?><br><br>

<?= form_label('Costo: ','txtCosto');?><br>
<?= form_label($datos->result()[0]->costo)?><br>
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