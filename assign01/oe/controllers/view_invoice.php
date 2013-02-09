<?php

/**
 * The View_invoice class simply gets all the invoice data from the database
 * and displays them in a proper table format.
 * 
 * By Luke Tao and Kevin Tangeman 
 */
class View_invoice extends Application 
{
    /**
     * The function to display the invoice table from database
     * onto the webapp. 
     */
    function index()
    {
        /* Name the page title "Invoice Data" */
        $this->data['pagetitle'] = 'Invoice Data';
        
        /* Set the page body to display the invoice table */
        $this->data['pagebody'] = 'invoice_table';
        
        /* Get the invoice data from the database and render the page */
        $this->data['invoices'] = $this->invoices->getAll_array();
        $this->render();
    }
}
?>
