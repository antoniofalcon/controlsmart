<?php $attr= array('id'=>'formSemana'); ?>
<?= form_open("semanas/delete/".$id,$attr);?>

<?= form_label('Semana: ','txtSemana');?>
<?= form_label($datos->result()[0]->semana);?>

<?= form_label('Costo: ','txtCosto');?>
<?= form_label($datos->result()[0]->costo)?>

<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>