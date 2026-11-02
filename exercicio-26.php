<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
  Rafael José do Campos
  Rafael Luis do P.B. Kluck
  João Victor Marchezan
  Lucas Gabriel
  Vinicius de Medeiros
  Vithor de Carmo Ariza dos Santos
Data: 08 de Outubro de 2025
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