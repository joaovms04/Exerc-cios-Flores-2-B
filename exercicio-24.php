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