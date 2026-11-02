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
Descritivo: Utilizei o foreach para percorrer o array associativo. A variável chave recebe o nome da informação, enquanto valor recebe o conteúdo correspondente. 
Assim, consigo mostrar cada dado separadamente.
******************************************************************************/

// Armazena os dados do aluno
$aluno = [
    "nome" => "Rafael",
    "idade" => 18,
    "curso" => "Engenharia de Software"
];

// Percorre as chaves e os valores do array
foreach ($aluno as $chave => $valor) {
    // Mostra cada informação
    echo $chave . ": " . $valor . "<br>";
}
?>