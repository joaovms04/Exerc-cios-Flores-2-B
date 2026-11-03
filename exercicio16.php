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
Descritivo: Exercício 16 - Dobro de positivo: Escreva um programa que leia um número
            inteiro positivo e exiba o dobro dele. Se o número for negativo,
            informe o erro.
*******************************************************************************/

/*
 * Explicação: lemos e validamos o inteiro. Com uma estrutura condicional
 * if/else verificamos o sinal: se for menor que zero exibimos a mensagem de
 * erro; caso contrário calculamos e exibimos o dobro (número * 2).
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$numero = filter_var(lerEntrada('Digite um número inteiro positivo: '), FILTER_VALIDATE_INT);

if ($numero === false) {
    echo 'Erro: digite apenas números inteiros.' . QUEBRA;
    exit(1);
}

if ($numero < 0) {
    echo 'Erro: o número digitado é negativo.' . QUEBRA;
} else {
    $dobro = $numero * 2;
    echo 'O dobro de ' . $numero . ' é ' . $dobro . QUEBRA;
}
