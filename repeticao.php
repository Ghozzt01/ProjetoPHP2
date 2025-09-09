<?php 
	$soma1=10;
	$soma2=10;
	$resp= $soma1 + $soma2;


	if($resp > 20){
		$resp = $resp + 8;
		echo("a resposta da soma: $soma1 + $soma2 + 8 é igual a $resp" );
	}

	else if($resp <= 20){
		$resp = $resp - 5;
		echo("a resposta da soma: $soma1 + $soma2 - 5 é igual a $resp" );
	}
	



	
 ?>