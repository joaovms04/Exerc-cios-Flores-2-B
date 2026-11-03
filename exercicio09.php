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
//Descritivo: Utiliza o WHILE para somar os números digitados até o usuário informar 0.
$soma = 0;

$numero = -1;

while ($numero != 0) {

    $numero = (int) readline("Digite um número (0 para encerrar): ");

    $soma = $soma + $numero;
}

echo "A soma dos números digitados é: $soma";
?>