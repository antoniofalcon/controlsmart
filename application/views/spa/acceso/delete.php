<?php $attr= array('id'=>'formUsuario'); ?>
<br><br><br>
<?= form_open("acceso/delete/".$id,$attr);?>

<?= form_label('Nombre: ','txtNombre');?>
<?= form_label($datos->result()[0]->usuario)?>
<br>
<?= form_label('Cuenta: ','txtCuenta');?>
<?= form_label($datos->result()[0]->cuenta)?>
<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>