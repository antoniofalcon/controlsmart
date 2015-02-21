<div id="listaCursos">
<table class="table table-bordered">
	<tr><th>Nombre del Maestro</th><th>Curso</th><th>Hora de Inicio</th><th>Hora Fin</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->maestro.'</td>';
		
		echo '<td>'.$value->curso.'</td>';

		echo '<td>'.$value->horaInicio.'</td>';

		echo '<td>'.$value->horaSalida.'</td>';
		echo '<td><a href="/controlsmart/cursos/edit/'.$value->idCurso.'">Editar</a>
		<a href="/controlsmart/cursos/delete/'.$value->idCurso.'">/Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>