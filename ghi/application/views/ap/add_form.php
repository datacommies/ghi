<?php
/**
* views/ap/add_form.php
*
* Present the add form page body.
*
* @author		Dennis Ho
* ------------------------------------------------------------------------
*/

$this->load->helper('form');
echo form_open('/add_vendor/{function}');

echo form_label('Vendor ID','id');
echo form_input('id','{id}');
echo '<br />';

echo form_label('Name','name');
echo form_input('name','{name}');
echo '<br />';

echo form_label('Status','status');
echo form_input('status','{status}');
echo '<br />';

echo form_submit('', 'Ok');

echo form_close();
