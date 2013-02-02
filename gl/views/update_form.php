<?php
    $this->load->helper('form');
    $this->load->helper('html');
    echo form_open('/update_account/post');   
    echo form_label('ID','id');
    echo form_input('id','{id}');
    echo br(1); 
    echo form_label('Account Name','accname');
    echo form_input('accname','{accname}');
    echo br(1); 
    echo form_label('Status','status');
    echo form_input('status','{status}');
    echo br(1);
    echo form_submit('', 'OK');
    echo form_close();
?>
