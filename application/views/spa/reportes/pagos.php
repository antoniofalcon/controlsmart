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
		'name'=>'txtBuscar',
		'id'=>'txtBuscar',
		'value'=>set_value('txtBuscar'));
?>
<!-- 
	//se hacen los llamados a los métodos para construir el formulario y se le pasan las propiedades 
	//form_close() sirve para cerrar la etiqueta del formulario. ejemplo </form>
 --><br><br><br>
<?= form_open("reportes/pagos",$attr);?>
<?= form_input($buscar); ?>
<?=form_submit('','Buscar'); ?>
<?=form_close();?>


