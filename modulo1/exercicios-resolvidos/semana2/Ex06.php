<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 6
* --------------------------------------------------------------------------
* Escreva um programa que a partir de duas variáveis, $numedoDeLados e $medida
* DoLado, que representam o o número de lados de um polígono regular
* e a medida do lado (em cm),  calcule e imprimima o seguinte:
* − Se o número de lados for igual a 3 escrever TRIÂNGULO e o valor da área
* − Se o número de lados for igual a 4 escrever QUADRADO e o valor da área.
* --------------------------------------------------------------------------
*/

$numeroDeLados = 3;
$medidaDoLado = 10;
$tipo = '';
$area = 0.0;

if($numeroDeLados == 3) {
    $tipo = 'TRIÂNGULO';
    $area = (($medidaDoLado * $medidaDoLado) * sqrt(3)) / 4;
}

if($numeroDeLados == 4) {
    $tipo = 'QUADRADO';
    $area = $medidaDoLado *  $medidaDoLado;
}

echo $tipo . '</br>';
echo $area. '</br>';
