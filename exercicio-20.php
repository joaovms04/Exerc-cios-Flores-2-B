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
Descritivo: Criei um array com os sete dias da semana. Depois, usei o for para percorrer as posições do array, começando em zero e indo até seis, mostrando um dia por vez.
******************************************************************************/

// Cria um array com os dias da semana
$dias = ["Segunda", "Terca", "Quarta", "Quinta", "Sexta", "Sabado", "Domingo"];

// Repete o código sete vezes
for ($i = 0; $i < 7; $i++) {
    // Mostra o dia correspondente à posição
    echo $dias[$i] . "<br>";
}
?>