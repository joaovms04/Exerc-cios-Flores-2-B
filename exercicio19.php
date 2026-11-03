<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
26008950-2 - Vinicius de Medeiros
26009345-2 - Vithor do Carmo Ariza
26011979-2 - Rafael Luis do P.B KluCk
26010098-2 - Rafael José Dos Santos
26008802-2 - João Victor Marchezan
26013906-2 - Lucas de Oliveira
Data: 03 de Novembro de 2026
Descritivo: Primeiro, criei um array com cinco números. 
Depois, usei o foreach para percorrer cada número e somá-lo em uma variável que começa em zero. No final, mostro o resultado.
******************************************************************************/

// Cria um array com números
$numeros = [10, 20, 30, 40, 50];

// Começa a soma em zero
$soma = 0;

// Percorre cada número do array
foreach ($numeros as $numero) {
    // Adiciona o número atual à soma
    $soma = $soma + $numero;
}

// Mostra o resultado final
echo "Soma: " . $soma;
?>