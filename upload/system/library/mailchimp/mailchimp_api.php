<?php
/**
 * Mailchimp Tool
 * @version 1.0.0
 * @author David Galet
 */

require(DIR_SYSTEM . 'library/mailchimp/vendor/autoload.php');

use \DrewM\MailChimp\MailChimp;
use MailChimp\Mailchimp_Core;

class Mailchimp_Api extends Mailchimp_Core implements IMailchimp {

    private $apiToken;
    private $mailchimp;

    public function setApiToken($token){
        $this->apiToken = $token;
    }

    public function setConnection(){
        if (isset($this->apiToken)) {
            $this->mailchimp = new MailChimp($this->apiToken);
        } else {
            $this->log('error', 'Missing ApiToken');
        }
    }

    public function createList($data = array())
    {
        try {
            return $this->mailchimp->post("/lists" , [
                'name' => $data['name'],
                'contact'        => array(
                    'company'   => $data['contact']['company'],
                    'address1'  => $data['contact']['address1'],
                    'address2'  => $data['contact']['address2'],
                    'city'      => $data['contact']['city'],
                    'state'     => $data['contact']['state'],
                    'zip'       => $data['contact']['zip'],
                    'country'   => $data['contact']['country'],
                    'phone'     => $data['contact']['phone'],
                ),
                'permission_reminder' => false,
                'campaign_defaults' => false,
                'email_type_option' => false
            ]);
        } catch (Exception $e){
            $this->log('Error','Errore di creazione lista', $e);
        }
    }

    public function readList($list_id = null, $options = array())
    {
        try {
            return $this->mailchimp->post("/lists" , $options );
        } catch (Exception $e){
            $this->log('Error','Errore di creazione lista', $e);
        }
    }

    public function editList($list_id = null, $data = array())
    {
        // TODO: Implement editList() method.
    }

    public function deleteList($list_id = null)
    {
        // TODO: Implement deleteList() method.
    }

    public function createStore($store_id = null, $data = array())
    {
        // TODO: Implement createStore() method.
    }

    public function readStore($store_id = null)
    {
        // TODO: Implement readStore() method.
    }

    public function editStore($store_id = null, $data = array())
    {
        // TODO: Implement editStore() method.
    }

    public function deleteStore($store_id = null)
    {
        // TODO: Implement deleteStore() method.
    }

    public function createCart($store_id, $data = array())
    {
        // TODO: Implement createCart() method.
    }

    public function readCart($store_id, $cart_id = null)
    {
        // TODO: Implement readCart() method.
    }

    public function editCart($store_id, $cart_id = null, $data = array())
    {
        // TODO: Implement editCart() method.
    }

    public function deleteCart($store_id, $cart_id = null)
    {
        // TODO: Implement deleteCart() method.
    }

    public function createProduct($store_id, $data = array())
    {
        // TODO: Implement createProduct() method.
    }

    public function readProduct($store_id, $product_id = null)
    {
        // TODO: Implement readProduct() method.
    }

    public function editProduct($store_id, $product_id = null, $data = array())
    {
        // TODO: Implement editProduct() method.
    }

    public function deleteProduct($store_id, $product_id = null)
    {
        // TODO: Implement deleteProduct() method.
    }

    public function createOrder($store_id, $data = array())
    {
        // TODO: Implement createOrder() method.
    }

    public function readOrder($store_id, $order_id = null)
    {
        // TODO: Implement readOrder() method.
    }

    public function editOrder($store_id, $order_id = null, $data = array())
    {
        // TODO: Implement editOrder() method.
    }

    public function deleteOrder($store_id, $order_id = null)
    {
        // TODO: Implement deleteOrder() method.
    }
}