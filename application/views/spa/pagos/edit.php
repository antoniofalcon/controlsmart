<?php $attr= array('id'=>'formPagos'); ?>
<?= form_open("pagos/edit/".$id,$attr);?>
<?php
	$options1=array();
	foreach ($clientes as $value) {
		$options[$value->idCliente]=$value->cliente;
	}	
	$options2=array();
	foreach ($semanas as $value) {
		$options[$value->idSemana]=$value->semana;
	}
	$curso= array(
		'name'=>'txtCurso',
		'id'=>'txtCurso',
		'value'=>set_value('txtCurso'));

?>
<?= form_label('Nombre del Cliente: ','cboClientes');?>
<?= form_dropdown('cboClientes',$options1); ?>
<?= form_error('cboClientes'); ?>
<?= form_label('Semana: ','cboSemanas');?>
<?= form_dropdown('cboSemanas',$options2); ?>
<?= form_error('cboSemanas'); ?>
<?=form_submit('','Editar'); ?>
<?=form_close();?>
