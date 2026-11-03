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
Descritivo: Exercício 33 - Procedimento: Crie um procedimento mostrarTabuada
            que receba um número e imprima sua tabuada de 1 a 10.
*******************************************************************************/

/*
 * Explicação: a função recebe um número e um for de 1 a 10 vai
 * multiplicando e imprimindo cada linha da tabuada.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

function mostrarTabuada(int $numero): void
{
    echo "Tabuada do $numero:" . QUEBRA;

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado" . QUEBRA;
    }

    echo QUEBRA;
}

mostrarTabuada(7);
mostrarTabuada(9);
