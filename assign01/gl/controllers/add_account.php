<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add_contact
 *
 * @author Admin
 */
class Add_account extends Application {
    /* Init the record and give them default values.  Then add the form. */
    
    function index() {
        $record = array('id'=>'', 'accname'=>'', 'status'=>'');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = "add_form";
        $this->render();
    }
    /* When submit is pressed, post is called. */
    function post() {
        /* Load validate_helper helper. */
        $this->load->helper("validate");
        $new_id = $_POST['id'];
        
        /* Check the ID. */
        if ($this->accounts->get($new_id) != null)
            $this->data['errors'][] = 'ID already exists.';
        
        /* Check the status. */
        if (!validate_status($_POST['status']) )
            $this->data['errors'][] = 'Status must be A or D.';
        
        /* Check the status. */
        if (!validate_id($_POST['id']) )
            $this->data['errors'][] = 'ID must be exactly 3 digits long.';
        
        /* If any errors, reload this page. */
        if (count($this->data['errors']) != 0 )
            $this->index();
        
        else { /* Otherwise, redirect to main. */
            $this->accounts->add($_POST);
            redirect('/');
        }
    }
}

?>
