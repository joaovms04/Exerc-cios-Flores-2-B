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
Descritivo: Exercício 12 - Terça parte: Escreva um programa que leia um número real
            e exiba a terça parte deste número.
*******************************************************************************/

/*
 * Explicação: lemos o número como texto, trocamos a vírgula por ponto (para
 * aceitar 2,5 ou 2.5) e checamos com is_numeric. A terça parte é o número
 * dividido por 3, exibida com 2 casas decimais.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$entrada = str_replace(',', '.', lerEntrada('Digite um número real: '));

if (!is_numeric($entrada)) {
    echo 'Erro: digite um número válido.' . QUEBRA;
    exit(1);
}

$numero = (float) $entrada;
$terca  = $numero / 3;

echo 'A terça parte de ' . $numero . ' é ' . number_format($terca, 2, ',', '.') . QUEBRA;
