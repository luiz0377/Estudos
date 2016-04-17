<?php
/*Algoritmo de Busca Sequencial
  Autor: Luiz Henrique Soares
*/
function busca($elementoProcurado, array $vetor)
{
    $tamanhoVetor = count($vetor);
    $IndEsq  = 0;
    $IndDir  = $tamanhoVetor - 1;
    $IndMeio = 0;
    $encontrado = false;

    while ($IndEsq <= $IndDir and !$encontrado)
    {
        $IndMeio = $IndEsq + (($IndDir - $IndEsq)/2);
        if ($vetor[IndMeio] < $elementoProcurado)
        {
            $IndEsq = $IndMeio + 1;
        } elseif ($vetor[IndMeio] > $elementoProcurado) {
            $IndDir = $IndMeio - 1;
        } else {
            $encontrado = true;
        }
    }

    if($encontrado)
    {
      echo $IndMeio;
    }else {
      echo "Valor não encontrado";
    }
}

$b = array(1, 2, 3, 4, 15, 17, 20);

echo "<br /> buscaBinária return: "; var_dump(busca(4, $b));
