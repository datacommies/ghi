<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/ap/welcome.php
 *
 * Entry page to the ap page.
 *
 * @author		Dennis Ho
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    /**
     * Welcome constructor that creates default application page.
     */
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagetitle'] = 'COMP4711 - Assignment 1';
        $this->data['pagebody'] = "home";
        $this->data['vendors'] = $this->vendors->getAll_array();
        $this->render();        
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */