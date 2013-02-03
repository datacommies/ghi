<?php

/**
 * The Invoices class model.
 * 
 * By Luke Tao and Kevin Tangeman 
 */
class Invoices extends _Mymodel {

    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('invoices', 'InvoiceID');
    }

 }
?>

