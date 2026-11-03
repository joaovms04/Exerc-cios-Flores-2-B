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
Descritivo: Exercício 31 - Procedimento: Crie um procedimento chamado saudacao
            que imprima "Bem-vindo ao PHP!".
*******************************************************************************/

/*
 * Explicação: criamos a função saudacao(), que só imprime a mensagem e não
 * devolve nada (por isso o void), e depois chamamos ela.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Declaração do procedimento
function saudacao(): void
{
    echo "Bem-vindo ao PHP!" . QUEBRA;
}

// Chamada do procedimento
saudacao();
