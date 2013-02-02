<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Accounts table.
 *
 * @author		Nick Raposo
 * ------------------------------------------------------------------------
 */

class Accounts extends _Mymodel {

    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('accounts', 'id');
    }

 }

/* End of file accounts.php */
/* Location: application/models/accounts.php */