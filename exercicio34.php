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
Descritivo: Exercício 34 - Procedimento: Elabore um procedimento
            verificarParImpar que receba um número e imprima se ele é "Par"
            ou "Ímpar".
*******************************************************************************/

/*
 * Explicação: se o resto da divisão por 2 der zero, o número é par; se não,
 * é ímpar. Testamos com alguns números, inclusive zero e negativo.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

function verificarParImpar(int $numero): void
{
    if ($numero % 2 === 0) {
        echo "$numero é Par" . QUEBRA;
    } else {
        echo "$numero é Ímpar" . QUEBRA;
    }
}

$numerosTeste = [4, 7, 0, 15, -6];

foreach ($numerosTeste as $numero) {
    verificarParImpar($numero);
}
