<div id="divFormularios">
<center><h3>Inscripciones</h3></center><br><br>
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

	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<?= form_label('Nombre del Cliente: ','cboCliente');?><br>
<?= form_dropdown('cboCliente',$optCliente); ?>
<br><br>
<?= form_label('Curso: ','cboCurso');?><br>
<?= form_dropdown('cboCurso',$optCurso); ?>
<br>
<div id="divBotones">
<?=form_submit($btnEditar,'Guardar'); ?>
<?=form_close();?>
</div>
</div>

