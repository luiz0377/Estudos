<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 17/04/2016
 * Time: 16:13
 */

namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function nomeCompleto()
    {
        $user = new User('Luiz', "Henrique");

        $expected = "Luiz Henrique";

        $this->assertEquals($expected,  $user->getCompleteName());
    }

    /**
     * @test
     */
    public function DefineEObtemNome()
    {
        $user = new User('Luiz', "Henrique");

        $this->assertEquals('Luiz',  $user->getName());
    }

    /**
     * @test
     */
    public function DefineEObtemLastName()
    {
        $user = new User('Luiz', "Henrique");

        $this->assertEquals('Henrique',  $user->getLastName());
    }
}