<?php
//Curso: Engenharia de Software
//Disciplina: Linguagem e Técnicas de Programacão
//Professor: Flores
//Turma: ESOFT-2
//Componentes: 
//             26008950-2 -  Vinicius de Medeiros
//             26009345-2 -  Vithor do Carmo Ariza
//             26011979-2 -  Rafael Luis do P.B Kluck
//             26010098-2 -  Rafael José
//             26008802-2 -  João Victor Marchezan
//             26013906-2 -  Lucas de Oliveira
//Data: 03 de Novembro de 2026
//Descritivo: Utiliza o FOR para somar todos os números de 1 até 100.
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma = $soma + $i;
}

echo "A soma dos números é: $soma";
?>