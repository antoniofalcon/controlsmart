<?php $attr= array('id'=>'formPagos'); ?>
<?= form_open("pagos/delete/".$id,$attr);?>

<?= form_label('Nombre del Cliente: ');?>
<?= form_label($datos->result()[0]->cliente);?>

<?= form_label('Fecha del Pago: ');?>
<?= form_label($datos->result()[0]->fecha)?>

<?= form_label('Hora del Pago: ');?>
<?= form_label($datos->result()[0]->hora)?>

<?= form_label('Semana que Pago: ');?>
<?= form_label($datos->result()[0]->semana)?>
<br>
<?=form_submit('','Borrar'); ?>
<?=form_close();?>