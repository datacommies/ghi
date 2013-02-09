<?php

/**
 * core/MY_Controller.php
 *
 * This is the default webapp controller for COMP4711 course.
 *
 * @author		LLT
 * @copyright           2010-2013, Luke Tao
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    const TICK = '<img src="/assets/images/tick.png"/>';

    protected $choices = array(// our menu navbar
        array("href" => "/add_invoice", "title" => "Add Invoice", "label" => "Add Invoice", "tick" => ""),
        array("href" => "/view_invoice", "title" => "View Invoices", "label" => "View Invoices", "tick" => ""),
        array("href" => "/update_invoice", "title" => "Update Invoices", "label" => "Update Invoices", "tick" => ""),
    );

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     * 
     * Loads title and any errors.
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'COMP4711 Winter 2013 Idea';
        $this->data['errors'] = array();
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['choices'] = $this->choices;
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->data, true);

        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['email'] = $this->properties->get('email');
        $this->data['instructor'] = $this->properties->get('instructor');
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }


}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */