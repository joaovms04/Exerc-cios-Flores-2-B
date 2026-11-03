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
Descritivo: Usei dois foreach. O primeiro percorre os produtos, e o segundo percorre as informações de cada produto, mostrando o nome e o preço. 
Isso é chamado de repetição aninhada, porque existe um laço dentro de outro.
******************************************************************************/

// Cria um array com os produtos
$produtos = [
    ["nome" => "Teclado", "preco" => 100],
    ["nome" => "Mouse", "preco" => 50],
    ["nome" => "Monitor", "preco" => 800]
];

// Percorre cada produto
foreach ($produtos as $produto) {

    // Percorre as informações de cada produto
    foreach ($produto as $chave => $valor) {
        // Mostra o nome da informação e seu valor
        echo $chave . ": " . $valor . "<br>";
    }

    // Pula uma linha entre os produtos
    echo "<br>";
}
?>