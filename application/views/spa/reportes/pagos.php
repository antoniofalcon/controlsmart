<div id="logoBuscar"><img src="/controlsmart/assets/img/smartlogo.png"></div><br>
 <div id="divBuscarPagos">
<center><h4>Buscar por Nombre completo del Alumno</h4></center>
<?php 
	//se genera un arreglo con las propiedades del formulario 
 	$attr= array('id'=>'formBuscar');

 	//form_open() sirve para crear el formulario 
?>
<?= form_open("reportes/pagos",$attr);?>
<?php
//se genera un varreglo con las propiedades de cada input.
//de está manera trabaja el helper de CI para formularios.
	$buscar= array(
		'class' => 'form-control',
		'name'=>'txtBuscar',
		'id'=>'txtBuscar',
		'value'=>set_value('txtBuscar'));
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );
?>
<!-- 
	//se hacen los llamados a los métodos para construir el formulario y se le pasan las propiedades 
	//form_close() sirve para cerrar la etiqueta del formulario. ejemplo </form>
 --><br>	
<?= form_open("reportes/pagos",$attr);?>
<?= form_input($buscar); ?>
<div id="divBotonesBuscar">
<?=form_submit($btnEditar,'Buscar'); ?>
<?=form_close();?>
</div>
</div>
