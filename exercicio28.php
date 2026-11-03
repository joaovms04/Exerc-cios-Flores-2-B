<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
             26008950-2 -  Vinicius de Medeiros
             26009345-2 -  Vithor do Carmo Ariza
             26011979-2 -  Rafael Luis do P.B Kluck
             26010098-2 -  Rafael José Dos Santos
             26008802-2 -  João Victor Marchezan
             26013906-2 -  Lucas de Oliveira
Data: 03 de Novembro de 2026
Descritivo: Exercício 28 - Array/Busca: Crie um array de frutas. Escreva um
            código que verifique se a fruta "Maçã" existe no array.
*******************************************************************************/

/*
 * Explicação: montamos uma lista de frutas e perguntamos ao PHP, com
 * in_array(), se a Maçã está nela. Se estiver, mostramos também a posição.
 */

// Quebra de linha que funciona tanto no terminal quanto no navegador
define('QUEBRA', PHP_SAPI === 'cli' ? PHP_EOL : '<br>');

$frutas = ["Banana", "Laranja", "Maçã", "Uva", "Abacaxi"];
$frutaProcurada = "Maçã";

// implode() junta os elementos do array em uma única string
echo "Frutas no array: " . implode(", ", $frutas) . QUEBRA;
echo "Procurando por: $frutaProcurada" . QUEBRA . QUEBRA;

if (in_array($frutaProcurada, $frutas, true)) {
    $posicao = array_search($frutaProcurada, $frutas, true);
    echo "A fruta \"$frutaProcurada\" existe no array (índice $posicao)." . QUEBRA;
} else {
    echo "A fruta \"$frutaProcurada\" não foi encontrada no array." . QUEBRA;
}
