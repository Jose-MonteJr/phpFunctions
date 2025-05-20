<?php
//Exercicio 1
function raizQuadrada($num) {
    $raiz = $num * $num;
    return $raiz;
}

$num1 = 9;
printf("A raiz quadrada de %d é: %d", $num1, raizQuadrada($num1));

//Exercicio 2

function calcularDelta($a, $b, $c) {
    $delta = ($b * $b) - (4 * $a * $c);
    if ($delta == 0) {
        printf("Temos uma raiz real");
    } elseif ($delta > 0) {
        printf("Temos duas raizes reais e diferentes");
    } else {
        printf("Não temos raizes reais");
    }
    echo "<br><br>";
    return $delta;
}
echo "<br><br>";
printf(calcularDelta(9, -12, 4));
echo "<br><br>";
//Exercicio 3

$custo = 100;
$taxa = 0.10;
function vendaProduto($custo, &$taxa) { //& - Fazer a referência
    $produto = ($custo*$taxa) + ($custo);
    $taxa += 5; 
    return $produto;
}

printf("O valor do produto é: %d", vendaProduto($custo, $taxa));
echo "<br>";
echo "<br>";
printf("O valor da taxa é: %.2f", $taxa);
?>