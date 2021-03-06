<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    const TICK = '<img src="/assets/images/tick.png"/>';

    protected $choices = array(// our menu navbar
        array("href" => "/welcome", "title" => "Welcome to COMP4711", "label" => "Home", "tick" => ""),
    );

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'COMP4711 Winter 2013';
        $this->data['errors'] = array();
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['choices'] = $this->choices;

        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['email'] = $this->properties->get('email');
        $this->data['instructor'] = $this->properties->get('instructor');
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }


}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */