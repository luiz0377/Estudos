<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 17/04/2016
 * Time: 17:21
 */

namespace ExampleTests;


use Example\Product;
use Example\ProductInterface;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function productType()
    {
        $product = new Product();
        $this->assertInstanceOf(ProductInterface::class, $product);
    }

    /**
     * @test
     */
    public function productName()
    {
        $product = new Product();
        $product->setName('Product 1');
        $this->assertEquals('Product 1', $product->getName());
    }
    /**
     * @test
     */
    public function productPrice()
    {
        $product = new Product();
        $product->setPrice(10);
        $this->assertEquals(10, $product->getPrice());
    }
    /**
     * @test
     */
    public function productDescription()
    {
        $product = new Product();
        $product->setDescrition('computer');
        $this->assertEquals('computer', $product->getDescrition());
    }
}