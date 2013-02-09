<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/welcome.php
 *
 * Entry page to the Purchase Order webapp.
 *
 * @author		Callum Styan
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    /*
     * Loads and renders the page.
     */
    function index() {
        $this->data['pagebody'] = "homepage";
        $this->data['po'] = $this->po->getAll_array();
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */