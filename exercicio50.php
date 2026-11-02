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
    Descritivo: Função que inverte uma string sem utilizar a função strrev().
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'inverterString' recebe uma string e descobre seu tamanho. 
 * Ela percorre a string original do último caractere até o primeiro (em ordem decrescente) 
 * e concatena cada caractere em uma nova variável, retornando a string invertida.
 */

function inverterString($texto) {
    $stringInvertida = "";
    $tamanho = mb_strlen($texto, 'UTF-8');
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $stringInvertida .= mb_substr($texto, $i, 1, 'UTF-8');
    }
    
    return $stringInvertida;
}

// Exemplo de uso:
$textoOriginal = "Linguagem PHP";
$textoInvertido = inverterString($textoOriginal);

echo "Original: $textoOriginal" . PHP_EOL;
echo "Invertido: $textoInvertido" . PHP_EOL;
?>