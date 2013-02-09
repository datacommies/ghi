<?php
// Loading the Code Ignitor Helper for forms
$this->load->helper('form');
echo form_open('/ic_controller/post');

// Creating lables and inputs for each row on the form
echo form_label('name','name');
echo form_input('name','{name}');

echo form_label('id','id');
echo form_input('id','{id}');

echo form_label('quantity','quantity');
echo form_input('quantity','{quantity}');

echo form_label('price','price');
echo form_input('price','{price}');

echo form_label('producer','producer');
echo form_input('producer','{producer}');

echo form_close();
?>
