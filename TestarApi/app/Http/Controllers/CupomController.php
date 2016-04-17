<?php

namespace App\Http\Controllers;

use App\Cupom;
use Illuminate\Http\Request;

use App\Http\Requests;

class CupomController extends Controller

{
    /* Recebe o Cupom e valida se existe e retorna true */

    public function cupom($cupom)
    {
        $cupom = Cupom::where('cpf', $cupom)->first();

        $result = false;

        if ($cupom) {

            $result = new \Stdclass();
            $result->cpf  = "101.808.704-40";
            $result->name = "Luiz Henrique Soares";
            $result->idade = '24';
            $result->profissao = 'Analista de Sistemas';
        }

        return response()->json($result);
    }

    public function serasa($cupom)
    {
        $cupom = Cupom::where('cpf', $cupom)->first();

        $result = false;

        if ($cupom) {

            $data = new \Stdclass();
            $data->cpf = "101.808.704-40";
            $data->name = "   luiz henrique soares";
            $data->idade = '22';
            $data->profissao = 'Analista de Sistemas';
        }

        return response()->json($data);
    }

}
