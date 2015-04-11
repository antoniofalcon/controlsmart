<div id="divFormularios">
<center><h3>Agregar Semana</h3></center>
<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/create",$attr);?>
<?php
	$semana= array(
		'placeholder' => 'Semana.',
		'class' => 'form-control',
		'name'=>'txtSemana',
		'id'=>'txtSemana',
		'value'=>set_value('txtSemana'));
	$costo= array(
		'placeholder' => 'Costo de la semana.',
		'class' => 'form-control',
		'name'=>'txtCosto',
		'id'=>'txtCosto',
		'value'=>set_value('txtCosto'));	
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
<?=form_submit($btnEditar,'Guardar'); ?>
<?=form_close();?>
</div>
</div>