<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/delete/".$id,$attr);?>

<?= form_label('Nombre: ','txtNombre');?>
<?= form_label($datos->result()[0]->maestro);?>

<?= form_label('Dirección: ','txtDireccion');?>
<?= form_label($datos->result()[0]->direccion)?>

<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_label($datos->result()[0]->telefono)?>

<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>