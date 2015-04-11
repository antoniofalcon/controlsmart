<div id="listaCursos">
<br><br><a href="/controlsmart/cursos/create"> <img src="/controlsmart/assets/img/add.png">Nuevo Curso</a><br><br>
<table class="table table-striped">
	<tr><th>Nombre del Maestro</th><th>Curso</th><th>Hora de Inicio</th><th>Hora Fin</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		echo '<tr>';
		
		echo '<td>'.$value->maestro.'</td>';
		
		echo '<td>'.$value->curso.'</td>';

		echo '<td>'.$value->horaInicio.'</td>';

		echo '<td>'.$value->horaSalida.'</td>';
		echo '<td><span class="icon-edit">	</span><a href="/controlsmart/cursos/edit/'.$value->idCurso.'">Editar</a>&nbsp;&nbsp;
		<span class="icon-cup">	</span><a href="/controlsmart/cursos/delete/'.$value->idCurso.'">&nbsp;Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>