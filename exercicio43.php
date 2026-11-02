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
    Descritivo: Função que recebe uma string e a retorna em letras maiúsculas.
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'converterParaMaiusculas' recebe um texto como parâmetro e utiliza 
 * a função nativa 'mb_strtoupper' para converter todos os caracteres em maiúsculas, 
 * garantindo suporte correto a caracteres acentuados da língua portuguesa.
 */

function converterParaMaiusculas($texto) {
    return mb_strtoupper($texto, 'UTF-8');
}

// Exemplo de uso:
$minhaString = "bem-vindo ao php!";
$stringMaiuscula = converterParaMaiusculas($minhaString);

echo "Texto original: " . $minhaString . PHP_EOL;
echo "Texto em maiúsculas: " . $stringMaiuscula . PHP_EOL;
?>