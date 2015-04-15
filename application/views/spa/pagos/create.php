<div id="divFormularios">
<center><h3>Agregar Pagos</h3></center><br><br>
<?php $attr= array('id'=>'formPagos'); ?>
<?= form_open("pagos/create",$attr);?>
<?php
	$options1=array();
	foreach ($clientes as $value) {
		$options1[$value->idCliente]=$value->cliente;
	}	
	$options2=array();
	foreach ($semanas as $value) {
		$options2[$value->idSemana]=$value->semana;
	}
		$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
	//print_r(date("d-m-Y H:i:s"));
?>
<center><?= form_label('Nombre del Cliente: ','cboClientes');?><br>
<?= form_dropdown('cboClientes',$options1); ?>
<?= form_error('cboClientes'); ?><br><br>
<?= form_label('Semana: ','cboSemanas');?><br>
<?= form_dropdown('cboSemanas',$options2); ?><br>
<?= form_error('cboSemanas'); ?><br><br>
</center>
<div id="divBotones">
<?=form_submit($btnEditar,'Guardar'); ?>
<?=form_close();?>
</div>
</div>




