<?php 

	echo "digite seu nome, idade e sexo <br/>";

	$nome = "darlene";
	$idade = 26;
	$sexo = 2; //1 masc e 2 fem


	if($idade > 25 && $sexo == 2){
		echo ("A $nome foi aceita");
	}else{
		echo "$nome não foi aceita";
	}
 ?>
