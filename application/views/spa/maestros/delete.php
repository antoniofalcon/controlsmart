<?php $attr= array('id'=>'formMaestro'); ?>
<?= form_open("maestros/delete/".$id,$attr);?>

<?= form_label('Nombre: ','txtNombre');?>
<?= form_label($datos->result()[0]->Maestro);?>

<?= form_label('Dirección: ','txtDireccion');?>
<?= form_label($datos->result()[0]->Direccion)?>

<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_label($datos->result()[0]->Telefono)?>

<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>