<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/edit/".$id,$attr);?>
<?php
	$Semana= array(
		'name'=>'txtSemana',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->semana);
	$costo= array(
		'name'=>'txtCosto',
		'id'=>'txtCosto',
		'value'=>$datos->result()[0]->costo);
	
?>
<?= form_label('Semana: ','txtSemana');?>
<?= form_input($Semana); ?>
<br>
<?= form_label('Costo: ','txtCosto');?>
<?= form_input($costo); ?>
<br>
<?=form_submit('','Editar'); ?>
<?=form_close();?>
