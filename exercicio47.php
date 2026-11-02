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
    Descritivo: Função que conta o número de vogais em uma string.
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'contarVogais' converte a string fornecida para minúsculas. 
 * Ela então percorre cada caractere do texto e verifica se ele pertence ao grupo 
 * de vogais (a, e, i, o, u), incrementando um contador toda vez que encontra uma.
 */

function contarVogais($texto) {
    $texto = mb_strtolower($texto, 'UTF-8');
    $vogais = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú', 'â', 'ê', 'ô', 'ã', 'õ'];
    $contador = 0;
    
    // Converte a string em um array de caracteres multibyte para percorrer
    $caracteres = mb_str_split($texto);
    
    foreach ($caracteres as $char) {
        if (in_array($char, $vogais)) {
            $contador++;
        }
    }
    
    return $contador;
}

// Exemplo de uso:
$textoExemplo = "Engenharia de Software";
$qtdVogais = contarVogais($textoExemplo);

echo "O texto '$textoExemplo' possui $qtdVogais vogais." . PHP_EOL;
?>