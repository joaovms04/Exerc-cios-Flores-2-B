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
Descritivo: Criei um array com números fora de ordem e utilizei a função sort para organizá-los do menor para o maior. 
Por último, usei print_r para mostrar o array ordenado.
******************************************************************************/

// Cria um array com números fora de ordem
$numeros = [10, 2, 5, 8, 1];

// Organiza os números em ordem crescente
sort($numeros);

// Mostra os números separados por vírgula
echo "Números em ordem crescente: ";
echo implode(", ", $numeros);
?>