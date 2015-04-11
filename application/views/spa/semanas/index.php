<div id="listaSemanas">
<br><br><a href="/controlsmart/semanas/create"> <img src="/controlsmart/assets/img/add.png">Agregar Semanas</a><br><br>

<table class="table table-striped">
	<tr><th>Semana</th><th>Costo</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->semana.'</td>';		
		echo '<td>'.$value->costo.'</td>';		

		echo '<td><span class="icon-edit">	</span><a href="/controlsmart/semanas/edit/'.$value->idSemana.'">Editar</a>
		&nbsp;&nbsp;<span class="icon-cup">	</span><a href="/controlsmart/semanas/delete/'.$value->idSemana.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>