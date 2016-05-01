<?php

/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 30/04/2016
 * Time: 14:48
 */
namespace ExampleTests;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Example\Math;

class MathTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function verificaSeOTipoDaClassEstaCorreto()
    {
        $math = new Math();
        $this->assertInstanceOf(Math::class, $math);
    }
    /**
     * @test
     */
    public function verificaSeConsegueSomar()
    {
        $math = new Math();
        $this->assertEquals(22 ,$math->somar(11,11)); //22
        $this->assertEquals(4 ,$math->somar(3,1)); //4
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSeValorNaoENumerico()
    {
        $math = new Math();
        $this->assertEquals(22, $math->somar('teste','Somar'));
    }
}