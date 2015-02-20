<div id="listaMaestros">
<table class="table table-bordered">
	<tr><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->maestro.'</td>';		
		echo '<td>'.$value->direccion.'</td>';
		echo '<td>'.$value->telefono.'</td>';

		echo '<td><a href="/controlsmart/maestros/edit/'.$value->idMaestro.'">Editar </a>/
		<a href="/controlsmart/maestros/delete/'.$value->idMaestro.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>