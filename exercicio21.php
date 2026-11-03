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
Descritivo: Criei um array associativo para armazenar os dados de um aluno. 
Nesse tipo de array, cada informação possui uma chave, como nome, idade e curso, associada ao seu valor.
******************************************************************************/

// Cria um array com os dados do aluno
$aluno = [
    "nome" => "Rafael",
    "idade" => 18,
    "curso" => "Engenharia de Software"
];

// Mostra cada informação separadamente
echo "DADOS DO ALUNO<br>";
echo "Nome: " . $aluno["nome"] . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Curso: " . $aluno["curso"];
?>