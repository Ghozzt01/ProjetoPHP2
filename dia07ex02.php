<?php

    $nums = [10, -10, 10, -10, 10, -10, -10, 10, -10, 10];


    $positivos = 0;
    $negativos = 0;
    $pares = 0;
    $impares = 0;

    foreach ($nums as $n) {
    if ($n > 0) {
    $positivos++;
    } elseif ($n < 0) {
    $negativos++;
    }


    if ($n % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }


    echo ("Positivos: $positivos<br>");
    echo ("Negativos: $negativos<br>");
    echo ("Pares: $pares<br>");
    echo ("Ímpares: $impares<br>");
?>