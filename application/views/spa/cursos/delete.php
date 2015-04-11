<div id="divFormularios">
<center><h3>Eliminar Curso</h3></center><br>
<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/delete/".$id,$attr);?>
<center>
<?= form_label('Nombre del Maestro: ','cboMaestros');?><br>
<?= form_label($datos->result()[0]->maestro);?><br>

<?= form_label('Curso: ','txtCurso');?><br>
<?= form_label($datos->result()[0]->curso)?><br>

<?= form_label('Hora de Inicio: ','txHoraInicio');?><br>
<?= form_label($datos->result()[0]->horaInicio)?><br>

<?= form_label('Hora de Salida: ','txHoraSalida');?><br>
<?= form_label($datos->result()[0]->horaSalida)?><br>
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
<?=form_submit($btnEditar,'Eliminar'); ?>
<?=form_close();?>
</div>
</div>