<?php $attr= array('id'=>'formInscripciones'); ?>
<?= form_open("incripciones/delete/".$id,$attr);?>

<?= form_label('Nombre del Cliente: ');?>
<?= form_label($datos->result()[0]->cliente);?>

<?= form_label('Curso: ');?>
<?= form_label($datos->result()[0]->curso)?>
<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>