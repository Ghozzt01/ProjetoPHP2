<?php 

// criando uma função
function titulo(){
	echo("Calculando valores: <br>");
}
function soma ($num1, $num2){
	return $num1 + $num2;
}


$valor1 = 10; $valor2 = 20;

//executando a função
titulo();
soma($valor1, $valor2);
$resposta = soma($valor1, $valor2);

echo("A soma de $valor1 e $valor2 é: $resposta <br>");

$somando = soma(30,40) + soma(50, 60);
echo("<br> $somando")
 ?>