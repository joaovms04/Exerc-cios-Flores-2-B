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
Descritivo: Exercício 29 - FOREACH/IF: Dado um array de números
            [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20.
*******************************************************************************/

/*
 * Explicação: olhamos número por número e só imprimimos os maiores que 20.
 * No final, contamos quantos foram.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

$numeros = [12, 5, 23, 18, 9, 45];
$limite = 20;
$quantidade = 0;

echo "Números maiores que $limite:" . QUEBRA;

foreach ($numeros as $numero) {
    if ($numero > $limite) {
        echo $numero . QUEBRA;
        $quantidade++; // conta mais um número encontrado
    }
}

echo QUEBRA . "Total: $quantidade de " . count($numeros) . " números." . QUEBRA;
