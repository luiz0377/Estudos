<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 01/05/2016
 * Time: 17:15
 */

namespace Mail;


use Example\Cliente\Cliente;
use Example\Mail\Mail;

class MailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function  verificaSeOClienteEstaModificandoValoresDosGetternESetter()
    {
        $cliente = $this->getMockBuilder(Cliente::class)
            ->getMock();

        $cliente->method('getEmail')
            ->willReturn('luizhenriquesoares91@gmail.com');

        $mail = new Mail();
        $mail->setCliente($cliente);
        $this->assertEquals('luizhenriquesoares91@gmail.com', $mail->getTo());
    }

}