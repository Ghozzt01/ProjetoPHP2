<?php 

echo("Sistema de folha de pagamento <br/><br/> ");
echo("salario folha: R$ <br/>");
echo("Desconto INSS: R$ <br/>");
echo("Desconto IR: R$ <br/>");

$salario=1690;
$inss = 0;
$ir = 0

function inss($salario){
	if($salario <= 1518){
		$resultado = $salario * 7.5 / 100;
		$inss = $resultado;
		echo("o desconto aplicado no seu salario será de : $resultado");
	}
	elseif ($salario > 1518 || $salario <= 2793.88) {
		$resultado = $salario * 9 / 100;
		$inss = $resultado;
		echo("o desconto aplicado no seu salario será de : $resultado"); 
		
	}
	elseif ($salario > 2793.89 || $salario <= 4190.83) {
		$resultado = $salario * 12 / 100;
		$inss = $resultado;
		echo("o desconto aplicado no seu salario será de : $resultado"); 
		
	}
	elseif ($salario > 4190.84 || $salario <= 8157.81) {
		$resultado = $salario * 14 / 100;
		$inss = $resultado;
		echo("o desconto aplicado no seu salario será de : $resultado"); 
		
	}
}

inss($salario);

function ir($salario){
	if($salario <= 2259.20){
		echo("o desconto aplicado no seu salario será de: 0 R$");
	}
	elseif ($salario > 2259.21 || $salario <= 2826.65) {
		$resultado = $salario * 7.5 / 100;
		$ir = $resultado;
		echo("o desconto aplicado no seu salario será de : $resultado"); 
		
	}
	elseif ($salario > 2826.66 || $salario <= 3751.05) {
		$resultado = $salario * 15 / 100;
		$ir = $resultado;
		echo("o desconto aplicado no seu salario será de : $resultado"); 
		
	}

}

ir($salario);













 ?>