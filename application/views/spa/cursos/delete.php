<?php $attr= array('id'=>'formCursos'); ?>
<?= form_open("cursos/delete/".$id,$attr);?>

<?= form_label('Nombre del Maestro: ','cboMaestros');?>
<?= form_label($datos->result()[0]->maestro);?>

<?= form_label('Curso: ','txtCurso');?>
<?= form_label($datos->result()[0]->curso)?>

<?= form_label('Hora de Inicio: ','txHoraInicio');?>
<?= form_label($datos->result()[0]->horaInicio)?>

<?= form_label('Hora de Salida: ','txHoraSalida');?>
<?= form_label($datos->result()[0]->horaSalida)?>

<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>