<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Vendors table.
 *
 * @author		Dennis Ho
 * ------------------------------------------------------------------------
 */
class Vendors extends _Mymodel {

    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('vendors', 'id');
    }
 }

/* End of file vendors.php */
/* Location: application/models/vendors.php */