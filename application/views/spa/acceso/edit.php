<div id="divFormularios">
<center><h3>Editar Usuario</h3></center>
<?php $attr= array('id'=>'formUsuario'); ?>
<?= form_open("acceso/edit/".$id,$attr);?>
<?php
	$nombre= array(
		'placeholder' => 'Nombre completo del Usuario :',
		'class' => 'form-control',
		'name'=>'txtNombre',
		'id'=>'txtNombre',
		'value'=>$datos->result()[0]->usuario);
	$cuenta= array(
		'placeholder' => 'Cuenta de Usuario :',
		'class' => 'form-control',
		'name'=>'txtCuenta',
		'id'=>'txtCuenta',
		'value'=>$datos->result()[0]->cuenta);
	$pswd= array(
		'placeholder' => 'Password mayor a 6 digitos :',
		'class' => 'form-control',
		'name'=>'txtPswd',
		'id'=>'txtPswd',
		'value'=>'',
		'type'=>'password');
	$cPswd= array(
		'placeholder' => 'Confirmar Password :',
		'class' => 'form-control',
		'name'=>'txtCPswd',
		'id'=>'txtCPswd',
		'value'=>'',
		'type'=>'password');
	$options= array(
			''=>'Seleccione el Nivel del Usuario',
			'1'=>'Administrador',
			'2'=>'Usuario',
		);
	$btnEditar = array(
		'class'=> 'btn btn-primary btn-lg btn-block',
	    'name' => 'btnEditar',
	    'id' => 'btnEditar',
	    'type' => 'submit',
	    'content' => 'Guardar'
	    );

?>
<!--<?= form_label('Nombre: ','txtNombre');?>-->
<?= form_input($nombre); ?>
<?= form_error('txtNombre'); ?><br>
<!--<?= form_label('Cuenta: ','txtCuenta');?>-->
<?= form_input($cuenta); ?>
<?= form_error('txtCuenta'); ?><br>
<!--<?= form_label('Contraseña: ','txtPswd');?>-->
<?= form_input($pswd); ?>
<?= form_error('txtPswd'); ?><br>
<!--<?= form_label('Confirmar Contraseña: ','txtCPswd');?> -->
<?= form_input($cPswd); ?>
<?= form_error('txtCPswd'); ?><br>
<!--<?= form_label('Nivel: ');?>-->
<?= form_dropdown('cboNivel',$options,$datos->result()[0]->nivel); ?>
<?= form_error('cboNivel'); ?>

<div id="divBotones">
<?=form_submit($btnEditar,'Editar'); ?>
<?=form_close();?>
</div>
</div>
<style type="text/css">
.error{
	color: red;
}

input{ display: block;}
</style>