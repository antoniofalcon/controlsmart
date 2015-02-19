<div id="listaMaestros">
<table class="table table-bordered">
	<tr><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->Maestro.'</td>';		
		echo '<td>'.$value->Direccion.'</td>';
		echo '<td>'.$value->Telefono.'</td>';

		echo '<td><a href="/controlsmart/maestros/edit/'.$value->IdMaestro.'">Editar </a>/
		<a href="/controlsmart/maestros/delete/'.$value->IdMaestro.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>