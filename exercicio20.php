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
Descritivo: Criei um array com os sete dias da semana. 
Depois, usei o for para percorrer as posições do array, começando em zero e indo até seis, mostrando um dia por vez.
******************************************************************************/

// Cria um array com os dias da semana
$dias = ["Segunda", "Terca", "Quarta", "Quinta", "Sexta", "Sabado", "Domingo"];

// Repete o código sete vezes
for ($i = 0; $i < 7; $i++) {
    // Mostra o dia correspondente à posição
    echo $dias[$i] . "<br>";
}
?>