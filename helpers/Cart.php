<?php
class Cart {
    public function productPrice($product)
    {
        return isset($product['price']) ? $product['price'] : '4,50 €';
    }
}