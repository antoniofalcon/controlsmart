<div id="listaPagos">
<table class="table table-bordered">
	<tr><th>Nombre del Cliente</th><th>Fecha</th><th>Hora</th><th>Semana que Pago</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->cliente.'</td>';
		
		echo '<td>'.$value->fecha.'</td>';

		echo '<td>'.$value->hora.'</td>';

		echo '<td>'.$value->semana.'</td>';
		echo '<td><a href="/controlsmart/pagos/edit/'.$value->idPago.'">Editar</a>
		<a href="/controlsmart/pagos/delete/'.$value->idPago.'">/Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>