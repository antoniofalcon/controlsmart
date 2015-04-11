<!--
	//se hacen los llamados a los métodos para construir el formulario y se le pasan las propiedades 
	//form_close() sirve para cerrar la etiqueta del formulario. ejemplo </form>
 -->
 <br><br><br> <div class="report">
 <img id="imgSmart" src="/controlsmart/assets/img/smart.jpg">
 <h2>Reporte de Alumnos con Adeudo</h2>
 <?php echo '<h3> A '. $fecha . '</h3>'?>

<div>
	<table class="table table-bordered">
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
#imgSmart{
	width: 50%;
	height: 50%;
}

.report {
	display: block;
	text-align: center;
}

.report table th{
	text-align: center;
}
</style>