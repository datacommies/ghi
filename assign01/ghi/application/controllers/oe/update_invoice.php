<?php
/**
 * The Update_invoice class pretty much has a form just like the
 * Add_invoice class except the validation will check for an
 * existing ID. The user must fill in all fields in order for
 * the update to take effect.
 * 
 * By Luke Tao and Kevin Tangeman 
 */
class Update_invoice extends Application
{
    /**
     * Index function that will produce the form. 
     */
    function index()
    {
        /* Initialize blank fields */
        $record = array('InvoiceID'=>'', 'CustName'=>'', 'Status'=>'', 'InvoiceDate'=>'');
        $this->data = array_merge($this->data, $record);
        
        /* Name the page title "Add Invoice Form" */
        $this->data['pagetitle'] = 'Update Invoice Form';
        
         /* Produce the page body based off of update_form view. */
        $this->data['pagebody'] = '/oe/update_form';
        
        /* Render the page */
        $this->render();
    }
    
    /**
     * Post function checks validation for each of the fields. If there is
     * and existing invoice ID and everything is valid, then it will update the 
     * existing invoice to the database and will redirect the user to the table page.
     */
    function post()
    {
        /* Load validate helper file */
        $this->load->helper('validate_helper');
        $new_id = $_POST['InvoiceID'];
        
        /* Check for invoice ID empty field */
        if (empty($_POST['InvoiceID'])) 
            $this->data['errors'][] = 'Must fill in an invoice ID number (3 digits long).';
        
        /* If there is an existing ID, validate the rest of the fields. */
        if ($this->invoices->get($new_id) != null)
        { 
            /* Validate customer name field. */
            if (empty($_POST['CustName'])) 
                $this->data['errors'][] = 'Must fill in a customer name.';
            
            /* Validate status field. */
            if (!validate_status($_POST['Status']))
                $this->data['errors'][] = 'Invalid status! Must be \'A\' (Active) or \'D\' (Disabled).';
            
            /* Validate date of invoice field. */
            if (!validate_date($_POST['InvoiceDate']))
                $this->data['errors'][] = 'Invalid date format! Must be in yyyy.mm.dd format.';
        } else 
            $this->data['errors'][] = 'Invoice ID does not exist.';
        
        /* If there are any field errors, display them. */
        if (count($this->data['errors']) > 0)
            $this->index();
        else
        {
            /* Update existing invoice to the database. */
            $this->invoices->update($_POST);
            
            /* Redirect user to the invoice table page. */
            redirect('/view_invoice');
        }
    }
}
?>
