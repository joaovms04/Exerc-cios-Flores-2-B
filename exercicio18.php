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
Descritivo: Exercício 18 - Casa das dezenas: Escreva um programa que leia um número
            inteiro de três algarismos (de 100 a 999) e exiba o algarismo
            correspondente à casa das dezenas.
*******************************************************************************/

/*
 * Explicação: validamos que o número está entre 100 e 999. Dividindo por 10
 * com intdiv() descartamos a unidade (ex.: 456 vira 45) e, com o módulo % 10,
 * ficamos com o último algarismo do resultado, que é a dezena (5).
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$numero = filter_var(lerEntrada('Digite um número inteiro de 100 a 999: '), FILTER_VALIDATE_INT);

if ($numero === false || $numero < 100 || $numero > 999) {
    echo 'Erro: digite um número inteiro entre 100 e 999.' . QUEBRA;
    exit(1);
}

$dezena = intdiv($numero, 10) % 10;

echo 'O algarismo da casa das dezenas de ' . $numero . ' é ' . $dezena . QUEBRA;
