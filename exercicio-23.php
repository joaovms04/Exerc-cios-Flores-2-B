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
Descritivo: Criei um array principal chamado produtos. Dentro dele, coloquei três arrays associativos, cada um com o nome e o preço de um produto. 
Dessa forma, consigo armazenar vários produtos com as mesmas características.
******************************************************************************/

// Cria um array com os produtos
$produtos = [
    ["nome" => "Teclado", "preco" => 100],
    ["nome" => "Mouse", "preco" => 50],
    ["nome" => "Monitor", "preco" => 800]
];

// Percorre cada produto
echo "LISTA DE PRODUTOS<br><br>";

foreach ($produtos as $produto) {
    // Mostra o nome e o preço
    echo "Produto: " . $produto["nome"] . "<br>";
    echo "Preço: R$ " . $produto["preco"] . "<br><br>";
}
?>