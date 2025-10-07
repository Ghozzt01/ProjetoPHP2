<?php

	$valores = [10, 10, 10, 10, 10, 10, 10, 10, 10, 10];


	$res = 1;

	foreach ($valores as $val) {
		$res = $res * $val;
	}

	echo($res);
?>