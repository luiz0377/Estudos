<?php

/**
 * Created by PhpStorm.
 * User: Yoda
 * Date: 13/03/2016
 * Time: 00:17
 */


class SingletonTest extends Singleton
{

    public function testSingleton()
    {
        $fistcall = Singleton::getInstance();

        return $fistcall;
    }


}

