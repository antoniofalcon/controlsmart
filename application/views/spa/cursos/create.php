<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/create",$attr);?>
<?php
	$options=array();
	foreach ($cursos as $value) {
		$options[$value->idMaestros]=$value->maestro;
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
<br>
<?= form_label('Curso: ','txtCurso');?>
<?= form_input($curso); ?>
<br><br>

<?= form_label('Hora de inicio','horaInicio');?>
<?= form_input($horaInicio); ?>


<br><br><br><br>
<?= form_label('Hora de Fin: ','txtHoraSalida');?>
<?= form_input($horaSalida); ?>
<br>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>

<script type="text/javascript">
	
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
</script>


