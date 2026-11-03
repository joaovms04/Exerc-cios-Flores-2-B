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