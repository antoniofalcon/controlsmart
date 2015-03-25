
<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/create",$attr);?>
<?php
	$semana= array(
		'name'=>'txtSemana',
		'id'=>'txtSemana',
		'value'=>set_value('txtSemana'));
	$costo= array(
		'name'=>'txtCosto',
		'id'=>'txtCosto',
		'value'=>set_value('txtCosto'));	
	?>
<?= form_label('Semana: ','txtSemana');?>
<?= form_input($semana); ?>
<?= form_error('txtSemana'); ?>
<?= form_label('Costo: ','txtCosto');?>
<?= form_input($costo); ?>
<?= form_error('txtCosto'); ?>
<?=form_submit('','Guardar'); ?>
<?=form_close();?>
