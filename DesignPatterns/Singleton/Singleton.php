<?php

/**
 * Created by PhpStorm.
 * User: Yoda
 * Date: 13/03/2016
 * Time: 00:09
 */
class Singleton
{

    /**
     * @var Singleton referencia a instancia da classe
     */
    private static $instance;



    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (null === self::$instance) {

            self::$instance = new static();
            return self::$instance;
        }

    }
}