<?php $attr= array('id'=>'formClienteD'); ?>
<?= form_open("clientes/delete/".$id,$attr);?>

<?= form_label('Nombre: ','txtNombre');?>
<?= form_label($datos->result()[0]->Cliente);?>

<?= form_label('Teléfono: ','txtTelefono');?>
<?= form_label($datos->result()[0]->Celular)?>

<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>