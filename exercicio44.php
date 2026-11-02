<?php
/******
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
************
Turma: ESOFT2
    Componentes:
        26008802-2 - João Marchezan
        26013906-2 - Lucas Gabriel
        26010098-2 - Rafael José Dos Santos
        26011979-2 - Rafael.K
        26008950-2 - Vinicius de Medeiros
        26009345-2 - vithor do carmo
    Data: 03 de Novembro de 2026
    Descritivo: Função que calcula e retorna a área de um retângulo.
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'calcularAreaRetangulo' recebe dois parâmetros numéricos (largura e altura).
 * Ela calcula a área multiplicando a largura pela altura e retorna o valor obtido.
 */

function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

// Exemplo de uso:
$largura = 5;
$altura = 10;
$area = calcularAreaRetangulo($largura, $altura);

echo "A área do retângulo de largura $largura e altura $altura é: $area" . PHP_EOL;
?>