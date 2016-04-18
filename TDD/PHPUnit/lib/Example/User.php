<?php

namespace Example;
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 17/04/2016
 * Time: 16:10
 */
class User
{
    protected $name;

    protected $lastName;

    public function __construct($name, $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function getCompleteName()
    {
        return $this->name . ' ' . $this->lastName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}