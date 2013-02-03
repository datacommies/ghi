<?php
$this->load->helper('form');
echo form_open('/ar/manage/{action}');
echo form_label('Customer ID','id');
echo form_input('id', '{id}');
echo form_label('Customer Name','name');
echo form_input('name', '{name}');
echo form_label('status','status');
echo form_input('status', '{status}');
echo form_submit('', 'ok');
echo form_close();
?>