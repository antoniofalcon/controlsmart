<div id="listaClientes">
<br><br><a href="/controlsmart/acceso/create"> <img src="/controlsmart/assets/img/add.png">Nuevo Usuario</a><br><br>
<table class="table table-striped">
	<tr><th>Nombre</th><th>Cuenta</th><th>Nivel</th><th>Acciones</th></tr>
<?php
	foreach ($datos as $value) {
		if($value->nivel == 1){
			$nivel = 'Administrador';
		}else{
			$nivel = 'Usuario';
		}
		echo '<tr>';		
		echo '<td>'.$value->usuario.'</td>';
		echo '<td>'.$value->cuenta.'</td>';
		echo '<td>'.$nivel.'</td>';
		echo '<td><span class="icon-edit"></span><a href="/controlsmart/acceso/edit/'.$value->idUsuario.'">&nbsp;&nbsp;Editar&nbsp;&nbsp;</a>
		<span class="icon-cup"></span><a href="/controlsmart/acceso/delete/'.$value->idUsuario.'">Eliminar</a></td>';
		echo '</tr>';
	}
?>
</table>
</div>