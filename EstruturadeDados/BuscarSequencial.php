<?php
/*Algoritmo de Busca Sequencial
  Autor: Luiz Henrique Soares
*/
function buscaSequencial($elementoProcurado, array $vetor) {
    $tamanhoVetor = count($vetor);
    for ($i = 0; $i < $tamanhoVetor; $i++) {
        if ($vetor[$i] == $elementoProcurado) {
            return $i;
        }
    }
    return -1;
}
$a = array(1, 2, 3, 4, 5, 6);

echo "<br /> buscaSequencial return: "; var_dump(buscaSequencial(4, $a));
