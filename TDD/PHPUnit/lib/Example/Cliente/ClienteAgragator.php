<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 01/05/2016
 * Time: 11:13
 */

namespace Example\Cliente;


class ClienteAgragator
{
    private $clientes = [];

    public function addCliente(Cliente $cliente)
    {
        $this->clientes[] = $cliente;
    }

    public function getClientes()
    {
        return $this->clientes;
    }
}