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
    Descritivo: Função que verifica se um número é primo (retorna true ou false).
**********************************/

/*
 * EXPLICAÇÃO DO CÓDIGO:
 * A função 'ehPrimo' recebe um número inteiro. Números menores ou iguais a 1 
 * não são primos. Em seguida, percorre de 2 até a raiz quadrada do número:
 * se houver algum divisor exato (resto 0), retorna false. Se nenhum divisor for encontrado, 
 * o número é primo e ela retorna true.
 */

function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Exemplo de uso:
$num = 17;
if (ehPrimo($num)) {
    echo "O número $num é primo." . PHP_EOL;
} else {
    echo "O número $num NÃO é primo." . PHP_EOL;
}
?>