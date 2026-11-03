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
Descritivo: Exercício 27 - Array Associativo: Crie um array com as notas de um
            aluno em 4 disciplinas e calcule a média.
*******************************************************************************/

/*
 * Explicação: guardamos as notas num array (matéria => nota), somamos tudo
 * no foreach e dividimos pela quantidade de matérias. No fim, dizemos se o
 * aluno passou.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

// Array associativo: a chave é a disciplina e o valor é a nota
$notas = [
    "Algoritmos"             => 8.5,
    "Banco de Dados"         => 7.0,
    "Engenharia de Software" => 9.0,
    "Matemática Discreta"    => 6.5,
];

$soma = 0;

echo "Notas do aluno:" . QUEBRA;

foreach ($notas as $disciplina => $nota) {
    echo "- $disciplina: " . number_format($nota, 1, ',', '.') . QUEBRA;
    $soma += $nota; // acumula a nota na soma
}

// Média = soma das notas / quantidade de disciplinas
$media = $soma / count($notas);

echo QUEBRA;
echo "Média final: " . number_format($media, 2, ',', '.') . QUEBRA;

// Extra: situação do aluno usando o operador ternário
$situacao = ($media >= 7) ? "Aprovado" : "Reprovado";
echo "Situação: $situacao" . QUEBRA;
