<!--
	//se hacen los llamados a los métodos para construir el formulario y se le pasan las propiedades 
	//form_close() sirve para cerrar la etiqueta del formulario. ejemplo </form>
 -->
 <div id="logo"><img src="/controlsmart/assets/img/smartlogo.png"></div>
 <div class="report">
 
 <h2>Reporte de Alumnos con Adeudo</h2>
 <?php echo '<h3> A '. $fecha . '</h3>'?>

<div>
	<table class="table table-striped">
	<th>Alumno</th>
<?php
	foreach ($datos as $value) {
		echo '<tr>';	
		echo '<td>'.$value->cliente.'</td>';
		echo '</tr>';
	}
?>
	</table>
</div>
</div>
<style>


.report {
	padding-left: 100px;
	padding-right: 100px;
	height: 50%;
	width: 100%;
	display: block;
	text-align: center;
}
.report table th{
	text-align: center;
}
</style>