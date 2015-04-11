<div id="divFormularios">
<center><h3>Editar Semana</h3></center>
<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/edit/".$id,$attr);?>
<?php
	$Semana= array(
		'placeholder' => 'Semana.',
		'class' => 'form-control',
		'name'=>'txtSemana',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->semana);
	$costo= array(
		'placeholder' => 'Costo de la semana.',
		'class' => 'form-control',
		'name'=>'txtCosto',
		'id'=>'txtCosto',
		'value'=>$datos->result()[0]->costo);
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
	
	
?>
<?= form_label('Semana: ','txtSemana');?>
<?= form_input($semana); ?>
<?= form_error('txtSemana'); ?><br>
<?= form_label('Costo: ','txtCosto');?>
<?= form_input($costo); ?>
<?= form_error('txtCosto'); ?>
<div id="divBotones">
<?=form_submit($btnEditar,'Editar'); ?>
<?=form_close();?>
</div>
</div>