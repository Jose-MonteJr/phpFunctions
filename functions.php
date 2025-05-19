<?php

function mediaNotas($nota1, $nota2, $nota3) {
    $resultado = ($nota1 + $nota2 + $nota3)/3;
    return $resultado;
} 


printf("A média das notas é: %d",mediaNotas(7, 2, 7));

?>