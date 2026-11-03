<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
             26008950-2 -  Vinicius de Medeiros
             26009345-2 -  Vithor do Carmo Ariza
             26011979-2 -  Rafael Luis do P.B Kluck
             26010098-2 -  Rafael José Dos Santos
             26008802-2 -  João Victor Marchezan
             26013906-2 -  Lucas de Oliveira
Data: 03 de Novembro de 2026
Descritivo: Exercício 30 - Array Multidimensional: Crie uma matriz 3x3 (array
            de arrays) e preencha-a com números. Imprima o elemento da segunda
            linha e terceira coluna.
*******************************************************************************/

/*
 * Explicação: a matriz é um array com três arrays dentro (as linhas).
 * Preenchemos de 1 a 9 com dois for e pegamos o [1][2], já que o PHP
 * começa a contar do zero.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

$matriz = [];
$valor = 1;

// Preenchimento: o for de fora controla a linha e o de dentro, a coluna
for ($linha = 0; $linha < 3; $linha++) {
    for ($coluna = 0; $coluna < 3; $coluna++) {
        $matriz[$linha][$coluna] = $valor;
        $valor++;
    }
}

// Exibição da matriz, uma linha por vez
echo "Matriz 3x3:" . QUEBRA;
foreach ($matriz as $linhaMatriz) {
    echo implode("  ", $linhaMatriz) . QUEBRA;
}

// Elemento da 2ª linha e 3ª coluna
echo QUEBRA;
echo "Elemento da 2ª linha e 3ª coluna: " . $matriz[1][2] . QUEBRA;
