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
Descritivo: Exercício 11 - Produto de dois inteiros: Escreva um programa que leia
            dois números inteiros e exiba o produto (multiplicação) entre eles.
*******************************************************************************/

/*
 * Explicação: lemos dois valores pelo teclado e validamos com filter_var
 * (FILTER_VALIDATE_INT) para garantir que são inteiros. Em seguida
 * multiplicamos com o operador aritmético * e exibimos o resultado.
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

$produto = $a * $b;

echo "Produto: $a x $b = $produto" . QUEBRA;
