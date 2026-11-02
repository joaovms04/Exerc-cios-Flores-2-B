<?php
/******
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
************
Turma: ESOFT2
    Componentes:
        26008802-2 - João Marchezan
        26013906-2 - Lucas Gabriel
        26010098-2 - Rafael José Dos Santos
        26011979-2 - Rafael.K
        26008950-2 - Vinicius de Medeiros
        26009345-2 - vithor do carmo
    Data: 03 de Novembro de 2026
    Descritivo: Função que recebe um array e retorna seu primeiro elemento.
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'obterPrimeiroElemento' verifica se o array passado não está vazio.
 * Caso contenha elementos, retorna o primeiro item (índice 0 ou via reset).
 * Se o array estiver vazio, retorna null.
 */

function obterPrimeiroElemento($array) {
    if (empty($array)) {
        return null;
    }
    return $array[0];
}

// Exemplo de uso:
$frutas = ["Maçã", "Banana", "Laranja", "Uva"];
$primeiraFruta = obterPrimeiroElemento($frutas);

echo "O primeiro elemento do array é: " . $primeiraFruta . PHP_EOL;
?>