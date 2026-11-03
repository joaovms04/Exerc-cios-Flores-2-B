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
Descritivo: Exercício 15 - Nome formatado: Escreva um programa que leia o nome e o
            sobrenome de uma pessoa e exiba-os na forma 'sobrenome, nome'
            (exemplo: 'Flores, José').
*******************************************************************************/

/*
 * Explicação: lemos nome e sobrenome em variáveis separadas e verificamos que
 * nenhum está vazio. Depois concatenamos com o operador ponto (.) na ordem
 * pedida: sobrenome, vírgula, espaço e nome.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$nome      = lerEntrada('Digite o nome: ');
$sobrenome = lerEntrada('Digite o sobrenome: ');

if ($nome === '' || $sobrenome === '') {
    echo 'Erro: informe o nome e o sobrenome.' . QUEBRA;
    exit(1);
}

echo $sobrenome . ', ' . $nome . QUEBRA;
