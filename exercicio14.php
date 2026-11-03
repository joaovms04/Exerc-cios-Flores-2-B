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
Descritivo: Exercício 14 - Média de aluno: Escreva um programa que leia o nome de um
            aluno e suas duas notas (AVs), calcule a média aritmética simples e
            exiba o nome do aluno seguido de sua média final.
*******************************************************************************/

/*
 * Explicação: lemos o nome e as duas notas (aceitando vírgula ou ponto).
 * Validamos as notas com is_numeric, calculamos (nota1 + nota2) / 2 e
 * exibimos o nome do aluno seguido da média final.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$nome  = lerEntrada('Digite o nome do aluno: ');
$nota1 = str_replace(',', '.', lerEntrada('Digite a nota da AV1: '));
$nota2 = str_replace(',', '.', lerEntrada('Digite a nota da AV2: '));

if ($nome === '' || !is_numeric($nota1) || !is_numeric($nota2)) {
    echo 'Erro: informe um nome e duas notas numéricas.' . QUEBRA;
    exit(1);
}

$media = ((float) $nota1 + (float) $nota2) / 2;

echo $nome . ' - Média final: ' . number_format($media, 2, ',', '.') . QUEBRA;
