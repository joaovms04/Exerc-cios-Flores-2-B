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
    Descritivo: Função que gera e retorna um array com números pares de 0 até n.
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'gerarArrayPares' cria um array vazio e executa um laço 'for' variando 
 * de 0 até o limite '$n' com incremento de 2 em 2 (ou testando resto zero). 
 * Cada número par é adicionado ao array, que é retornado ao final.
 */

function gerarArrayPares($n) {
    $pares = [];
    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }
    return $pares;
}

// Exemplo de uso:
$limite = 20;
$meusPares = gerarArrayPares($limite);

echo "Números pares de 0 até $limite: " . implode(", ", $meusPares) . PHP_EOL;
?>