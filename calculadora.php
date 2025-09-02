<?php 
	echo ("---CALCULADORA--- <br> selecione uma opção abaixo e efetue a operação <br> 1-Somar <br> 2-subtrair <br> 3-multiplicar <br> 4-dividir ");
	$valor1 = 10;
	$valor2 = 20;

	$operador = "1";

	// funções
	function somar($num1, $num2){
		return($num1 + $num2);
	}
	function subtrair($num1, $num2){
		return($num1 - $num2);
	}
	function multiplicar($num1, $num2){
		return($num1 * $num2);
	}
	function dividir($num1, $num2){
		return($num1 / $num2);
	}

	function imprimir(){
		echo ("Os números digitados foram: $valor1 e $valor2 <br>Operador escolhido: $operador <br>A conta foi: $valor1 $operador $valor2 = $resposta <br>");
	}

	if($operador == "1"){
			$resposta = somar($valor1, $valor2);
		}
		else if($operador == "2"){
			$operador = "-";
			$resposta = subtrair($valor1, $valor2);
		}
		else if($operador == "3"){
			$operador = "*";
			$resposta = multiplicar($valor1, $valor2);
		}
		else if($operador == "4"){
			$operador = "/";
			$resposta = dividir($valor1, $valor2);
		}
		else {
			echo("Inválido.");
		}
	imprimir();

	
 ?>



