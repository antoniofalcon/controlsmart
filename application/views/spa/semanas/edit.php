<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/edit/".$id,$attr);?>
<?php
	$Semana= array(
		'name'=>'txtSemana',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->Semana);
	$costo= array(
		'name'=>'txtCosto',
		'id'=>'txtCosto',
		'value'=>$datos->result()[0]->Costo);
	
?>
<?= form_label('Semana: ','txtSemana');?>
<?= form_input($semana); ?>
<br>
<?= form_label('Costo: ','txtCosto');?>
<?= form_input($costo); ?>
<br>
<?=form_submit('','Editar'); ?>
<?=form_close();?>
