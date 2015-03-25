<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/create",$attr);?>
<?php
	$options=array();
	foreach ($maestros as $value) {
		$options[$value->idMaestro]=$value->maestro;
	}	
	$curso= array(
		'name'=>'txtCurso',
		'id'=>'txtCurso',
		'value'=>set_value('txtCurso'));
	$horaInicio= array(
		'name'=>'txtHoraInicio',
		'id'=>'txtHoraInicio',
		'value'=>set_value('txtHoraInicio'));
	$horaSalida= array(
		'name'=>'txtHoraSalida',
		'id'=>'txtHoraSalida',
		'value'=>set_value('txtHoraSalida'));
?>
<?= form_label('Nombre del Maestro: ','cboMaestros');?>
<?= form_dropdown('cboMaestros',$options); ?>
<?= form_error('cboMaestros'); ?>
<?= form_label('Curso: ','txtCurso');?>
<?= form_input($curso); ?>
<?= form_error('txtCurso'); ?>
<?= form_label('Hora de inicio','txtHoraInicio');?>
<?= form_input($horaInicio); ?>
<?= form_error('txtNombre'); ?>
<?= form_label('Hora de Fin: ','txtHoraSalida');?>
<?= form_input($horaSalida); ?>
<?= form_error('txtHoraSalida'); ?>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>

<script type="text/javascript">
	
<<<<<<< HEAD
	//code for datepicker, see github 
=======
	$(document).ready(function(){
    $('#txtHoraInicio').timepicker({
    	timeFormat: 'HH:mm:ss',
    	startTime: new Date(0,0,0,14,0,0),
    	interval: 60,
    	scrollbar: true,
    	maxHour: 20
    });

    $('#txtHoraSalida').timepicker({
    	timeFormat: 'HH:mm:ss',
    	startTime: new Date(0,0,0,14,0,0),
    	interval: 60,
    	scrollbar: true,
    	maxHour: 20
    });
}

);
>>>>>>> origin/master
</script>


