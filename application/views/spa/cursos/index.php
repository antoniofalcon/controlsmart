<div id="listaCursos">
<table class="table table-bordered">
	<tr><th>Nombre del Maestro</th><th>Curso</th><th>Hora de Inicio</th><th>Hora Fin</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->Cliente.'</td>';
		
		echo '<td>'.$value->Celular.'</td>';
		echo '<td><a href="/controlsmart/clientes/edit/'.$value->IdCliente.'">/Editar</a>
		<a href="/controlsmart/clientes/delete/'.$value->IdCliente.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>