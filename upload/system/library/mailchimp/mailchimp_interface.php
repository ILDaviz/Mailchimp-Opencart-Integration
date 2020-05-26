<?php

interface IMailchimp {
    public function createList($data = array());
    public function readList($list_id = null, $options = array());
    public function editList($list_id = null , $data = array());
    public function deleteList($list_id = null);

    public function createStore($store_id = null , $data = array());
    public function readStore($store_id = null);
    public function editStore($store_id = null , $data = array());
    public function deleteStore($store_id = null);

    public function createCart($store_id, $data = array());
    public function readCart($store_id, $cart_id = null);
    public function editCart($store_id, $cart_id = null, $data = array());
    public function deleteCart($store_id, $cart_id = null);

    public function createProduct($store_id, $data = array());
    public function readProduct($store_id, $product_id = null);
    public function editProduct($store_id, $product_id = null, $data = array());
    public function deleteProduct($store_id, $product_id = null);

    public function createOrder($store_id, $data = array());
    public function readOrder($store_id, $order_id = null);
    public function editOrder($store_id, $order_id = null, $data = array());
    public function deleteOrder($store_id, $order_id = null);

}