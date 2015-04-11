<div id="divFormularios">
<center><h3>Editar Curso</h3></center>
<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/edit/".$id,$attr);?>
<?php
	$options=array();
	foreach ($maestros as $value) {
		$options[$value->idMaestro]=$value->maestro;
	}
	$cboMaestros= array(
		'class' => 'select',
		'name'=>'cboMaestros',
		'id'=>'cboMaestros',
		'value'=>$datos->result()[0]->maestro);
	$curso= array(
		'class' => 'form-control',
		'name'=>'txtCurso',
		'id'=>'txtCurso',
		'value'=>$datos->result()[0]->curso);
	$horaInicio= array(
		'class' => 'form-control',
		'name'=>'txtHoraInicio',
		'id'=>'txtHoraInicio',
		'value'=>$datos->result()[0]->horaInicio);
	$horaSalida= array(
		'class' => 'form-control',
		'name'=>'txtHoraSalida',
		'id'=>'txtHoraSalida',
		'value'=>$datos->result()[0]->horaSalida);
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<?= form_label('Maestro :','cboMaestros');?><br>
<?= form_dropdown('cboMaestros',$options); ?>
<?= form_error('cboMaestros'); ?><br>
<?= form_label('Curso: ','txtCurso');?>
<?= form_input($curso); ?>
<?= form_error('txtCurso'); ?><br>
<?= form_label('Hora de inicio','txtHoraInicio');?>
<?= form_input($horaInicio); ?>
<?= form_error('txtNombre'); ?><br>
<?= form_label('Hora de Fin: ','txtHoraSalida');?>
<?= form_input($horaSalida); ?>
<?= form_error('txtHoraSalida'); ?>
<div id="divBotones">
<?=form_submit($btnEditar,'Editar'); ?>
</div>
<?=form_close();?>
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