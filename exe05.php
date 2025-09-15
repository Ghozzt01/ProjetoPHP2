<?php 

$IM = 0;
$IF = 0;
$altM = 0;
$altF = 0;
$sx1 = "F";
$sx2 = "M";
$somaAltF = 0;
$cont = 0;

function medAltF($somaAltF) {
	$media = $somaAltF / 25;
	echo "média de altura das mulheres é: $media </br>";
}

while($cont <= 25){
$IM = 30;
$IF = 17;
$altM = 1.80;
$altF = 1.70;
$sx1 = "F";
$sx2 = "M";
$somaAltF = $somaAltF + $altF;
$cont++;

}
	if($altM > $altF) {
		echo "a maior altura é: $altM </br> e a menor altura é: $altF </br>";
	} else{
		echo "a maior altura é: $altF </br> e a menor altura é: $altM </br>";
	};

		if($IM > $IF) {
		echo "maior idade masculina é: $IM </br> e a menor idade feminina é: $IF </br>";
	} else{
		echo "maior altura é de $altF</br> e a menor altura é: $altM </br>";
	};


	echo(medAltF($somaAltF));
 ?>