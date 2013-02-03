<?php

/**
 * This class essentially produces a form for the user to fill out the invoice.
 * Invoice fields include Invoice ID, customer name, status, and date of invoice.
 * 
 * By Luke Tao and Kevin Tangeman
 */
class Add_invoice extends Application
{
    /**
     * Index function that produces the form on the webapp.
     */
    function index()
    {
        /* Initalize blank fields */
        $record = array('InvoiceID'=>'', 'CustName'=>'', 'Status'=>'', 'InvoiceDate'=>'');
        $this->data = array_merge($this->data, $record);
        
        /* Name the page title "Add Invoice Form" */
        $this->data['pagetitle'] = 'Add Invoice Form';
        
        /* Produce the page body based off of add_form view. */
        $this->data['pagebody'] = 'oe/add_form';
        
        /* Render the page */
        $this->render();
    }
    
    /**
     * Post function checks validation for each of the fields. If everything is valid,
     * then it will add the new invoice to the database and will redirect the user to the
     * table page.
     */
    function post()
    {
        /* Load validate helper */
        $this->load->helper('validate_helper'); 
        $new_id = $_POST['InvoiceID'];
        
        /* Validate invoice ID field. */
        if (empty($_POST['InvoiceID'])) 
            $this->data['errors'][] = 'Must fill in an invoice ID number (3 digits long).';
        else if (!validate_ID($_POST['InvoiceID']))
            $this->data['errors'][] = 'Invalid ID format! Must be 3 digits long.';
        
        /* Validate if there are duplicate invoice ID's. */
        if ($this->invoices->get($new_id) != null)
            $this->data['errors'][] = 'Invoice ID already used.';
        
        /* Checks to see if the customer name field is empty. */
        if (empty($_POST['CustName']))
            $this->data['errors'][] = 'Must fill in a customer name.';
        
        /* Validate status field */
        if(empty($_POST['Status']))
            $this->data['errors'][] = 'Must fill in a status (\'A\' for Active or \'D\' for Disabled)';
        else if (!validate_status($_POST['Status']))
            $this->data['errors'][] = 'Invalid status! Must be \'A\' (Active) or \'D\' (Disabled).';
        
        /* Validate date of invoice field. */
        if(empty($_POST['InvoiceDate']))
            $this->data['errors'][] = 'Must fill in an invoice date. (yyyy.mm.dd format).';
        if (!validate_date($_POST['InvoiceDate']))
            $this->data['errors'][] = 'Invalid date format! Must be in yyyy.mm.dd format.';
        
        /* If there are any errors in any fields, display the error messages */
        if (count($this->data['errors']) > 0) 
            $this->index();
        else
        {
            /* Add invoice to database. */
            $this->invoices->add($_POST);
            
            /* redirect user to the invoice table. */
            redirect('/view_invoice');
        }
    }
}
?>
