<div id="listaClientes">
<table class="table table-bordered">
	<tr><th>Nombre</th><th>Teléfono</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->cliente.'</td>';
		
		echo '<td>'.$value->celular.'</td>';
		echo '<td><a href="/controlsmart/clientes/edit/'.$value->idCliente.'">Editar</a>
		<a href="/controlsmart/clientes/delete/'.$value->idCliente.'">/Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>