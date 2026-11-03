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