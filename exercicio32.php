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
Descritivo: Exercício 32 - Procedimento com Parâmetro: Crie um procedimento
            saudacaoUsuario que receba um nome como parâmetro e imprima
            "Olá, [nome]!".
*******************************************************************************/

/*
 * Explicação: a função recebe um nome e monta a frase com ele. Chamamos
 * para o professor e depois para cada pessoa do grupo.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Declaração do procedimento com um parâmetro do tipo string
function saudacaoUsuario(string $nome): void
{
    echo "Olá, $nome!" . QUEBRA;
}

// Uma chamada simples
saudacaoUsuario("Professor Flores");

// O mesmo procedimento reaproveitado para vários nomes
$grupo = ["Vinicius", "Vithor", "Rafael Luis", "Rafael José", "João Victor", "Lucas"];

foreach ($grupo as $integrante) {
    saudacaoUsuario($integrante);
}
