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
    Descritivo: Função que calcula o fatorial de um número.
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'fatorial' recebe um inteiro não negativo. Inicializa um resultado com 1 
 * e executa um laço 'for' multiplicando o resultado por cada valor sucessivo de 1 
 * até o número informado. Retorna o total acumulado.
 */

function fatorial($numero) {
    if ($numero < 0) {
        return null; // Fatorial não é definido para números negativos
    }
    
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    
    return $resultado;
}

// Exemplo de uso:
$num = 5;
$resultadoFatorial = fatorial($num);

echo "O fatorial de $num ($num!) é: $resultadoFatorial" . PHP_EOL;
?>