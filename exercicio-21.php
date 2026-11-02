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