<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Welcome class that displays the welcome home page of the web application.
 * 
 * By Luke Tao
 */
class Welcome extends Application {

    /**
     * Welcome constructor that creates default application page.
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * Display components of the page and render it.
     *
     */
    function index() {
        $this->data['pagetitle'] = 'COMP4711 - Assignment 1';
        $this->data['pagebody'] = 'home';
        $this->data['invoices'] = $this->invoices->getAll_array();
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */