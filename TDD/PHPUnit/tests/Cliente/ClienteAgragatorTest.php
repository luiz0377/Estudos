<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 01/05/2016
 * Time: 11:43
 */

namespace Cliente;

use Example\Cliente\ClienteAgragator;
use Example\Cliente\Cliente;

class ClienteAgragatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function verificaFuncionamentoDoClienteAgregator()
    {
        $cliente = $this->getMockBuilder(Cliente::class)
            ->getMock();

        $cliente->method('getNome')
            ->willReturn('Luiz Henrique');

        $cliente2 = $this->getMockBuilder(Cliente::class)
            ->getMock();

        $cliente2->method('getNome')
            ->willReturn('Luiz Henrique2');

        $agregator = new ClienteAgragator();
        $agregator->addCliente($cliente);
        $agregator->addCliente($cliente2);

        $clientes = $agregator->getClientes();
        $this->assertEquals('Luiz Henrique',  $clientes[0]->getNome());
        $this->assertEquals('Luiz Henrique2', $clientes[1]->getNome());

    }

}