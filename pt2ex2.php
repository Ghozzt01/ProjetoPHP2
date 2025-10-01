<?php 

	$m = [
	    [25, 12, 35],
	    [85, 47, 98],
	    [32, 38, 105]
	];

	foreach ($m as $i => $l) {
	    $soma = array_sum($l);
	    echo "Soma da linha " . ($i + 1) . ": $soma </br>";
	}

 ?>