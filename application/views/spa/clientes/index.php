<div id="listaClientes">
<table class="table table-bordered">
	<tr><th>Nombre</th><th>Teléfono</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->Cliente.'</td>';
		
		echo '<td>'.$value->Celular.'</td>';
		echo '<td><a href="/controlsmart/clientes/edit/'.$value->IdCliente.'">Editar</a>
		<a href="/controlsmart/clientes/delete/'.$value->IdCliente.'">/Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>