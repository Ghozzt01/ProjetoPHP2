<?php 
echo("Digite 3 números: <br>");
$num1 = 4;
$num2 = 9;
$num3 = 2;
$bp = 0; 
$loop = false;

while($loop != true)
    if($num1 < $num2){
		$bp = $num2;
		$num2 = $num1;
		$num1 = $bp;
    }
    elseif ($num2 < $num3) {
		$bp = $num3;
		$num3 = $num2;
		$num2 = $bp;
	} 
    else{
		$loop = true;
		echo("a ordem decrescente dos numeros são: $num1 $num2 $num3");
	}
?>