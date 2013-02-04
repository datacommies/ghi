<?php

/**
 * controllers/ap/add_vendor.php
 *
 * Controller for the add vendor page.
 *
 * @author		Dennis Ho
 * ------------------------------------------------------------------------
 */
class Add_vendor extends Application {
    /**
    * Displays the page. 
    */
    function index() {
        $this->data['pagebody'] = "/ap/add_form";
        $record = array('id'=>'', 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data,$record);
        $this->data['function'] = 'post';
        $this->render();
    }
        
    /**
    * Validates user input and submits form if valid.
    */
    function post() {        
        $this->load->helper('validate');
        
        $new_id = $_POST['id'];
        $new_name = $_POST['name'];
        $new_status = $_POST['status'];
    
        // Validate id
        if ($new_id == null)
            $this->data['errors'][] = 'ID can not be null.';
        else if (!validate_vendor_id($new_id))
            $this->data['errors'][] = 'ID must be 3 digits.';
        else if ($this->vendors->get($new_id) != null)
            $this->data['errors'][] = 'Vendor ID already used.';
            
        // Validate name
        if ($new_name == null)
            $this->data['errors'][] = 'Name can not be null.';
        
        // Validate status
        if ($new_status == null)
            $this->data['errors'][] = 'Status can not be null.';
        else if (!validate_vendor_status($new_status))
            $this->data['errors'][] = 'Status must be either "A" or "D"';
                        
        // Proceed if no errors exist
        if (count($this->data['errors']) > 0)
            $this->index();
        else {
            $this->vendors->add($_POST);
            redirect('/');        
        } 
    }
    
    /*
     * Validates user input and updates db if valid
     */
    function update_db() {
        $this->load->helper('validate');
        
        $new_id = $_POST['id'];
        $new_name = $_POST['name'];
        $new_status = $_POST['status'];
        
        // Validate id
        if ($new_id == null)
            $this->data['errors'][] = 'ID can not be null.';
        else if (!validate_vendor_id($new_id))
            $this->data['errors'][] = 'ID must be 3 digits.';
        else if ($this->vendors->get($new_id) != null)
            $this->data['errors'][] = 'Vendor ID not found.';
            
        // Validate name
        if ($new_name == null)
            $this->data['errors'][] = 'Name can not be null.';
        
        // Validate status
        if ($new_status == null)
            $this->data['errors'][] = 'Status can not be null.';
        else if (!validate_vendor_status($new_status))
            $this->data['errors'][] = 'Status must be either "A" or "D"';
                        
        // Proceed if no errors exist
        if (count($this->data['errors']) > 0)        
            $this->index();        
        else {
            $this->vendors->update($_POST);
            redirect('/');        
        } 
    }
        
    /*
     * Sub-controller for update vendor
     */
    function update($id) {
        $this->data['pagebody'] = '/add_vendor';
        
        // Pre-populate with selected id
        $record = array('id'=>$id, 'name'=>'', 'status'=>'');
        $this->data = array_merge($this->data,$record);
        
        $this->data['function'] = 'update_db';        
        $this->render();        
    }
    
    /*
     * Sub-controller for delete vendor
     */
    function delete($id) {       
        $vendor = $this->vendors->get($id);
        $vendor->status = 'D';
        $this->vendors->update($vendor);
        redirect('/');
    }
}

/* End of file add_vendor.php */
/* Location: application/controllers/add_contact.php */