<?php

function Ordenar(array $vetor)
{
	for ($i=0; $i < count($vetor) -1; $i++) {
		$menor = $i;
		for ($j=$i+1; $j < count($vetor); $j++) {
			if($vetor[menor] > vetor[j])
			{
				$menor = $j;
			}
		}
		if($menor !=$i)
		{
			$aux = $vetor[$i];
			$vetor[$i] = $vetor[$menor];
			$vetor[$menor] = $aux;
		}

	}
}

$a = array(1, 2, 5, 6, 10, 6);

echo "<br /> BuscaSequencial return: "; var_dump (Ordenar($a));
