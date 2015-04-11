<div id="listaMaestros">
<br><br><a href="/controlsmart/maestros/create"> <img src="/controlsmart/assets/img/add.png">Nuevo Maestro</a><br><br>
<table class="table table-striped">
	<tr><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->maestro.'</td>';		
		echo '<td>'.$value->direccion.'</td>';
		echo '<td>'.$value->telefono.'</td>';

		echo '<td><span class="icon-edit">	</span><a href="/controlsmart/maestros/edit/'.$value->idMaestro.'">Editar&nbsp;&nbsp;</a>
		&nbsp;&nbsp;<span class="icon-cup">	</span><a href="/controlsmart/maestros/delete/'.$value->idMaestro.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>