<?php
	$hora = 3;
	if($hora > 6 and $horas <=12){
		echo "Bom dia";
	} elseif ($hora > 12 and $hora <=18) {
		echo "Bom tarde";		
	} elseif ($hora > 18 and $hora <=24) {
		echo "Bom noite";		
	}else{
		echo "Bons sonhos .... ";		
	}
?>

