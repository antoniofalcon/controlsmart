<div id="logo"><img src="/controlsmart/assets/img/smartlogo.png"></div>
<div class="report">

 <h2>Control de pagos por semana</h2>

<?php echo '<h4> NAME: <u>'. $datos[0]->cliente . '</u> TEL: <u>'. $datos[0]->celular .'</u> </h4>'?>
<div>
	<table class="table table-bordered">
<?php
for ($i=1; $i <=36 ; $i++) {
	if($i == 1 || $i == 7 || $i == 13 || $i == 19 || $i ==25 || $i == 31 ){
	echo '<tr>';
	}
	if ($i <=$cantidad[0]->cantidad) {
		if ($semanas[$i-1]->semana == $i ) {
				echo '<td><h6 class="text-right"><b>'.$i.'</b></h6><img src="/controlsmart/assets/img/seity.png"></td>';
		}
	}
	else{	
		echo '<td><b><h6 class="text-right"><b>'.$i.'</b></h6></b><img src="/controlsmart/assets/img/sei.png"></td>';
	}
	if($i == 6 || $i == 12 || $i == 18 || $i == 24 || $i == 30 || $i == 36){
	echo '</tr>';
	}
}

?>
	</table>
</div>
</div>
<div class="text-center">
<h4>HAITI #93 TEL. <b>3-10-20-95</b> Col. Misión del Arco. Cel. <b>21 235271</b><h4>
<h4>e-mail <b><u>smart_eteacher@hotmail.com</u></b><h4>
<h4><b>L.E.I.</b> <em>Gladys Patrón Tamayo</em><h4>
 <?php echo '<h5 class="text-right"> '. $fecha . '</h5>'?>
</div>
<style>
#imgSmart{
	width: 50%;
	height: 50%;
}

.report {
	display: block;
	text-align: center;
}

.report table td{
	text-align: center;
	width: 10px;
}
.report table td h6{
	padding: 0;
	margin: 0;
}
</style>