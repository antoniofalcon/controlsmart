<div id="listaClientes">
	<br><br><a href="/controlsmart/clientes/create"> <img src="/controlsmart/assets/img/add.png">Nuevo Alumno</a><br><br>
<table class="table table-striped">
	<tr><th>Nombre</th><th>Teléfono</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->cliente.'</td>';
		
		echo '<td>'.$value->celular.'</td>';
		echo '<td><span class="icon-edit"></span><a href="/controlsmart/clientes/edit/'.$value->idCliente.'">&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		<span class="icon-cup">	</span><a href="/controlsmart/clientes/delete/'.$value->idCliente.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>