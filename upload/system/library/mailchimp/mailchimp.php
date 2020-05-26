<?php
/**
 * Class Mailchimp
 * @version 1.0.0
 * @author David Galet
 */

namespace MailChimp;

class Mailchimp {

    protected $config;
    protected $db;
    private $log;

    public function __construct($registry) {
        $this->log = $registry->get('log');
        $this->config = $registry->get('config');
        $this->db = $registry->get('db');
    }

    /**
     * Metodo per la stampa del log in Mailchimp
     * @param string $type Tipo di errore (INFO,ERROR)
     * @param string $string La stringa di errore
     * @param array $array Inserisci un array per un errore
     */
    public function log($type,$string = '', $array = []){
        $log = new log('mailchimp.log');
        if (!empty($array)){
            // Stampa la stringa con l'array
            $log->write($type.':'.$string . '::' . print_r($array));
        } else {
            // Stampa la stringa senza l'array
            $log->write($type.':'.$string);
        }
    }

}