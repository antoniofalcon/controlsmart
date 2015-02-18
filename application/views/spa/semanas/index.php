<div id="listaSemanas">
<table class="table table-bordered">
	<tr><th>Semana</th><th>Costo</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->Semana.'</td>';		
		echo '<td>'.$value->Costo.'</td>';		

		echo '<td><a href="/controlsmart/semanas/edit/'.$value->IdSemana.'">Editar/</a>
		<a href="/controlsmart/semanas/delete/'.$value->IdSemana.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>