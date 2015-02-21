<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/edit/".$id,$attr);?>
<?php
	$options=array();
	foreach ($maestros as $value) {
		$options[$value->idMaestro]=$value->maestro;
	}
	$curso= array(
		'name'=>'txtCurso',
		'id'=>'txtCurso',
		'value'=>$datos->result()[0]->curso);
	$horaInicio= array(
		'class'=>'form-control',
		'name'=>'txtHoraInicio',
		'id'=>'txtHoraInicio',
		'value'=>$datos->result()[0]->horaInicio);
	$horaFin= array(
		'name'=>'txtHoraSalida',
		'id'=>'txtHoraSalida',
		'value'=>$datos->result()[0]->horaSalida);
?>
<?= form_label('Nombre del Maestro: ','cboMaestros');?>
<?= form_dropdown('cboMaestros',$options); ?>
<br>
<?= form_label('Curso: ','txtCurso');?>
<?= form_input($curso); ?>
<br>
<div class="col-sm-6">
<div class="form-group">
<div class="input-group date" id="txthoraInicio">

<?= form_input($horaInicio); ?>
<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
</div>
</div>
</div>
<br>
<?= form_label('Hora de Fin: ','txtHoraSalida');?>
<?= form_input($horaFin); ?>
<br>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>


