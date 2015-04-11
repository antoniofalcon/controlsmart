<div id="divFormularios">
<center><h3>Nuevo Curso</h3></center>
<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/create",$attr);?>
<?php
	$options=array();
	foreach ($maestros as $value) {
		$options[$value->idMaestro]=$value->maestro;
	}	
	$curso= array(
		'class' => 'form-control',
		'name'=>'txtCurso',
		'id'=>'txtCurso',
		'value'=>set_value('txtCurso'));
	$horaInicio= array(
		'class' => 'form-control',
		'name'=>'txtHoraInicio',
		'id'=>'txtHoraInicio',
		'value'=>set_value('txtHoraInicio'));
	$horaSalida= array(
		'class' => 'form-control',
		'name'=>'txtHoraSalida',
		'id'=>'txtHoraSalida',
		'value'=>set_value('txtHoraSalida'));
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<?= form_label('Nombre del Maestro: ','cboMaestros');?><br>
<?= form_dropdown('cboMaestros',$options); ?>
<?= form_error('cboMaestros'); ?><br>

<?= form_label('Curso: ','txtCurso');?><br>
<?= form_input($curso); ?>
<?= form_error('txtCurso'); ?><br>

<?= form_label('Hora de inicio','txtHoraInicio');?><br>
<?= form_input($horaInicio); ?>
<?= form_error('txtHorainicio'); ?><br>

<?= form_label('Hora de Fin: ','txtHoraSalida');?><br>
<?= form_input($horaSalida); ?>
<?= form_error('txtHoraSalida'); ?>
<div id="divBotones">
<?=form_submit($btnEditar,'Guardar'); ?>
<?=form_close();?>
</div>
</div>

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
});
</script>


