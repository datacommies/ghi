<?php

//if (!defined('APPPATH'))
    //exit('No direct script access allowed');

/**
 * controllers/ap/welcome.php
 *
 * Entry page to the ap page.
 *
 * @author		Dennis Ho
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function index() {
        $this->data['pagebody'] = "welcome";
        $this->data['vendors'] = $this->vendors->getAll_array();
        $this->render();        
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */