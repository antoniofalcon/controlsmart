<div id="listaPagos">
<br><br><a href="/controlsmart/pagos/create"> <img src="/controlsmart/assets/img/add.png">Nuevo Pago</a><br><br>
<table class="table table-bordered">
	<tr><th>Nombre del Cliente</th><th>Fecha</th><th>Hora</th><th>Semana que Pago</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->cliente.'</td>';
		
		echo '<td>'.$value->fecha.'</td>';

		echo '<td>'.$value->hora.'</td>';

		echo '<td>'.$value->semana.'</td>';
		echo '<td><span class="icon-edit">	</span><a href="/controlsmart/pagos/edit/'.$value->idPago.'">Editar</a>
		<span class="icon-cup">	</span><a href="/controlsmart/pagos/delete/'.$value->idPago.'">	Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>