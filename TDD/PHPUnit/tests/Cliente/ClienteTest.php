<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 01/05/2016
 * Time: 11:27
 */

namespace Cliente;

use Example\Cliente\Cliente;

class ClienteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function verificaSeGetESetName()
    {
        $cliente = new Cliente();
        $cliente->setNome('Luiz Henrique');
        $this->assertEquals('Luiz Henrique', $cliente->getNome());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testverificaSeEmailEhInvalido()
    {
        $cliente = new Cliente();
        $this->assertEquals($cliente->setEmail('teste'), $cliente->getEmail());
    }
}