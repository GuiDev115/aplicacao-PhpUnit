<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\Cart;
use app\libraries\Product;

class CartTest extends TestCase{

   /* public function testAddProduct()
    {
        $product = new \App\Libraries\Product();
        $product->setName('Apple');

        $cart = new \App\Libraries\Cart();
        $cart->add($product);

        $this->assertEquals($product, $cart->getCart()[0]);
    }*/

    public function testIfCartIsEmpty(){
        $cart = new Cart;

        $this->assertEmpty($cart->getCart());

    }

    public function testIfNotCartIsEmpty(){
        $cart = new Cart;
        $cart->add(new Product);

        $this->assertNotEmpty($cart->getCart());

    }
}