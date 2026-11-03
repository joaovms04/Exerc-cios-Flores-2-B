<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
            26008950-2 -  Vinicius de Medeiros
            26009345-2 -  Vithor do Carmo Ariza
            26011979-2 -  Rafael Luis do P.B Kluck
            26010098-2 -  Rafael José Dos Santos
            26008802-2 -  João Victor Marchezan
            26013906-2 -  Lucas Gabriel Vasconcelos dos anjos
Data: 03 de Novembro de 2026
Descritivo: Exercício 13 - Média aritmética de dois inteiros: Escreva um programa que
            leia dois números inteiros e exiba a média aritmética simples entre eles.
*******************************************************************************/

/*
 * Explicação: lemos e validamos dois inteiros. A média aritmética simples é a
 * soma dos valores dividida pela quantidade de valores, ou seja, (a + b) / 2.
 * Os parênteses garantem que a soma seja feita antes da divisão.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$a = filter_var(lerEntrada('Digite o primeiro número inteiro: '), FILTER_VALIDATE_INT);
$b = filter_var(lerEntrada('Digite o segundo número inteiro: '), FILTER_VALIDATE_INT);

if ($a === false || $b === false) {
    echo 'Erro: digite apenas números inteiros.' . QUEBRA;
    exit(1);
}

$media = ($a + $b) / 2;

echo 'Média aritmética entre ' . $a . ' e ' . $b . ': ' . number_format($media, 2, ',', '.') . QUEBRA;
