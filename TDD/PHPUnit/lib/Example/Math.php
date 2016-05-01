<?php

/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 30/04/2016
 * Time: 14:45
 */
namespace Example;

class Math
{
    public function somar($x, $y)
    {
        if(! is_numeric($x) or ! is_numeric($y)) {
            throw new \InvalidArgumentException('Os valores devem ser inteiros');
        }
        return $x + $y;
    }

}