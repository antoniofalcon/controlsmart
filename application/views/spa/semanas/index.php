<div id="listaSemanas">
<table class="table table-bordered">
	<tr><th>Semana</th><th>Costo</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->semana.'</td>';		
		echo '<td>'.$value->costo.'</td>';		

		echo '<td><a href="/controlsmart/semanas/edit/'.$value->idSemana.'">Editar/</a>
		<a href="/controlsmart/semanas/delete/'.$value->idSemana.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>