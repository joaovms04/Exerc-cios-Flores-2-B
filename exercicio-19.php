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