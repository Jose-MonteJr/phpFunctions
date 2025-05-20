<?php

/*function mediaNotas($nota1, $nota2, $nota3) { //Função com parâmetros
    $resultado = ($nota1 + $nota2 + $nota3)/3; 
    return $resultado; //return - retorna o valor da variável
} 

printf("A média das notas é: %d",mediaNotas(7, 2, 7));*/

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