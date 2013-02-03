<?php

class Manage extends Application {

    function index() {
        //Default the values to empty
        $record = array('id' => '', 'name' =>'', 'status' => '');
        //merge with working set
        $this->data = array_merge($this->data, $record);
        //set the page body
        $this->data['pagebody'] = "/ar/manage";
        //set the action
        $this->data['action'] = 'post';
        //set the array
        $this->data['AR'] = $this->customers->getAll_array();
        $this->render();
    }

    /**
     * Sub controller for adding a new record
     */
    function post() {
    $this->load->helper('validate');
    
        //Verify id
        $new_id = $_POST['id'];
        if ($this->customers->get($new_id) != null) {
            $this->data['errors'][] = 'Invalid ID';
        }
        //Verify name
        if (!validate_name($_POST['name'])) {
            $this->data['errors'][] = 'Invalid Name';
        }
        //Verify status
        if (!validate_name($_POST['status'])) {
            $this->data['errors'][] = 'Invalid Status';
        }
        //if there is errors
        if (count($this->data['errors']) > 0) {
            $this->index();
        } else {
            $this->customers->add($_POST);
            redirect('/ar/welcome');
        }
    }
    
    /**
     * Sub controller for deleting a record
     * @param type $id
     * 
     */
    function delete($id) {
        //Get the record we want to delete
        $old_id = $this->customers->get($id);
        //Change the status to deleted
        $old_id->status = 'D';
        //update in db
        $this->customers->update($old_id);
        redirect('/ar/welcome');
    }
    
    /**
     *  Sub-controller for the update button
     * @param type $id
     */
    function update($id) {
        //Set the page body
        $this->data['pagebody'] = 'ar/manage';
        //Get the record we want to update
        $record = $this->customers->get_array($id);
        //Merge with working set
        $this->data = array_merge($this->data, $record);
        //Set the action
        $this->data['action'] = 'update_customer';
        $this->render();
    }
    
    /**
     * This function merges the update form with the database.
     */
    function update_customer() {
 
        $up_id = $_POST['id'];

        if ($this->customers->get($up_id) == null)
            $this->data['errors'][] = 'Record does not exist.';
        
        //Get the old record
        $changedrecord = $this->customers->get_array($up_id);
        //Merge with post
        $changedrecord = array_merge($changedrecord, $_POST);
        //Update in DB
        $this->customers->update($changedrecord);
        redirect('/ar/welcome');
    
    }

    

}

?>
