<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 * @author  	John Payment
 * ------------------------------------------------------------------------
 * This is the model for IC on Assignment 01
 */

class ic_model extends _Mymodel 
{
    // Constructor
    function __construct() 
	{
        parent::__construct();
        $this->setTable('name', 'id', 'quantity', 'price', 'producer');
    }
 }
