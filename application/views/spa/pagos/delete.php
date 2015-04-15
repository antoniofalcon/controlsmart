<div id="divFormularios">
<center><h3>Eliminar Pago</h3></center><br>
<?php $attr= array('id'=>'formPagos'); ?>
<?= form_open("pagos/delete/".$id,$attr);?>
<center>
<?= form_label('Nombre del Cliente: ');?><br>
<?= form_label($datos->result()[0]->cliente);?>
<br><br>
<?= form_label('Fecha del Pago: ');?><br>
<?= form_label($datos->result()[0]->fecha)?>
<br><br>
<?= form_label('Hora del Pago: ');?><br>
<?= form_label($datos->result()[0]->hora)?>
<br><br>
<?= form_label('Semana que Pago: ');?><br>
<?= form_label($datos->result()[0]->semana)?>
<br>
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
<div id="divBotones">
<?=form_submit($btnEditar,'Borrar'); ?>
<?=form_close();?>
</div>
</div>