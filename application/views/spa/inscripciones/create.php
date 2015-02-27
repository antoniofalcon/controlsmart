<?php $attr= array('id'=>'formInscripciones'); ?>
<?= form_open("inscripciones/create",$attr);?>
<?php
	$optCliente=array();
	foreach ($clientes as $value) {
		$optCliente[$value->idCliente]=$value->cliente;
	}
	$optCurso=array();
	foreach ($cursos as $value) {
		$optCurso[$value->idCurso]=$value->curso;
	}			
?>
<?= form_label('Nombre del Cliente: ','cboCliente');?>
<?= form_dropdown('cboCliente',$optCliente); ?>
<br>
<?= form_label('Curso: ','cboCurso');?>
<?= form_dropdown('cboCurso',$optCurso); ?>
<br>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>



