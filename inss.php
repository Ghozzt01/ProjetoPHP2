<?php 
echo "====================================CALCULO DE IMPOSTO DE RENDA E INSS==================================== <br> <br>";


// Variaveis
$salario = 1000;
$inss = 14;
$ir = 0;
$resultado = 0;

if ($salario > 2259.21 || $salario <= 2826.65){
	$ir = 7.5;
}
elseif ($salario > 2826.66 || $salario <= 3751.05){
	$ir = 15;	 
}
elseif ($salario > 3751.06 || $salario <= 4664.68){
	$ir = 22.5;
}		
elseif ($salario > 4664.68) {
	$ir = 27.5;	
}


$resultado = $salario - ($salario * $inss / 100);
$liquido = $resultado - ($resultado * $ir / 100);
echo("Salario Folha: $salario <br>");
echo("Desconto INSS: $inss% <br>");
echo("Valor com o desconto do inss: $resultado <br>");
echo("Desconto I.R.: $ir <br>");
echo("Salario liquido: $liquido<br>");










 ?>