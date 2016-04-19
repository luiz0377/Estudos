<?php

namespace App\Http\Controllers;

use App\Consult;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    /**
     * @param $cpf
     * @return \Illuminate\Http\JsonResponse,
     */
    public function assertiva($cpf)
    {
        $cpf = Consult::where('cpf', $cpf)->first();

        $result = false;

        if ($cpf) {

            $result = new \Stdclass();
            $result->cpf  = "101.808.704-40";
            $result->nome = "Luiz Henrique Soares";
            $result->dataNascimento = '24';
            $result->sexo = "Masculono";
            $result->mae  = "Monica Maria Brito Botelho";
            $result->rg   = "454544";
            $result->telFixo1 = "(81)3432-3911";
            $result->telFixo2 = "(81)3432-3232";
            $result->telFixo3 = "(81)3432-3232";
            $result->logradouro = "Rua Maria da Conceição Viana, N1360";
            $result->complemento = "apt 202";
            $result->bairro = "Jardim Atlãntico";
            $result->cidade = "Olinda";
            $result->uf = "PE";
            $result->cep = "53050-110";
            $result->email1 = "luizhenriquesoares91@gmail.com";
            $result->email2 = "luizhenrique0377@outlook.com";
            $result->profissao = 'Analista de Sistemas';
            $result->empresa = "PSV Turismo";
            $result->renda = "Até 2SM";
        }

        return response()->json($result);
    }

    /**
     * @param $cpf
     * @return \Illuminate\Http\JsonResponse
     */
    public function serasa($cpf)
    {
        $cpf = Consult::where('cpf', $cpf)->first();

        $result = false;

        if ($cpf) {
            $data = new \Stdclass();
            $data->cpf = "101.808.704-40";
            $data->name = "   luiz henrique soares";
            $data->idade = '22';
            $data->profissao = 'Analista de Sistemas';
        }

        return response()->json($data);
    }

}
