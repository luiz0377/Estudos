<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 17/04/2016
 * Time: 17:26
 */

namespace Example;


class Product implements ProductInterface
{
    protected $price;

    protected $descrition;

    /**
     * @return mixed
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescrition()
    {
        return $this->descrition;
    }

    /**
     * @param mixed $descrition
     */
    public function setDescrition($descrition)
    {
        $this->descrition = $descrition;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed $name
     */

    public function setName($name)
    {
        return $this->name = $name;
    }
}