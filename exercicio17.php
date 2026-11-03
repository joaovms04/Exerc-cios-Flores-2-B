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
Descritivo: Exercício 17 - Divisão detalhada: Escreva um programa que leia dois números
            inteiros (dividendo e divisor) e exiba Dividendo, Divisor, Quociente
            (inteiro) e Resto da divisão.
*******************************************************************************/

/*
 * Explicação: lemos dividendo e divisor e impedimos divisão por zero. O
 * quociente inteiro é obtido com intdiv() e o resto com o operador módulo (%).
 * Assim vale a relação: dividendo = divisor * quociente + resto.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Lê uma linha digitada no teclado (CLI) e remove espaços/quebras das pontas
function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

$dividendo = filter_var(lerEntrada('Digite o dividendo: '), FILTER_VALIDATE_INT);
$divisor   = filter_var(lerEntrada('Digite o divisor: '), FILTER_VALIDATE_INT);

if ($dividendo === false || $divisor === false) {
    echo 'Erro: digite apenas números inteiros.' . QUEBRA;
    exit(1);
}

if ($divisor === 0) {
    echo 'Erro: o divisor não pode ser zero.' . QUEBRA;
    exit(1);
}

$quociente = intdiv($dividendo, $divisor);
$resto     = $dividendo % $divisor;

echo 'Dividendo: ' . $dividendo . QUEBRA;
echo 'Divisor: ' . $divisor . QUEBRA;
echo 'Quociente: ' . $quociente . QUEBRA;
echo 'Resto: ' . $resto . QUEBRA;
