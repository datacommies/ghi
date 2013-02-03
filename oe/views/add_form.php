<?php

/**
 * Add invoice form view.
 * 
 * By Luke Tao and Kevin Tangeman 
 */
$this->load->helper('form');
$this->load->helper('html');
echo heading('Add Invoice', 1);
echo form_open('/add_invoice/post');
echo form_label('Invoice ID ','InvoiceID');
echo form_input('InvoiceID','{InvoiceID}');
echo br();
echo form_label('Name ','CustName');
echo form_input('CustName', '{CustName}');
echo br();
echo form_label('Status ','Status');
echo form_input('Status', '{Status}');
echo br();
echo form_label('Date ','InvoiceDate');
echo form_input('InvoiceDate', '{InvoiceDate}');
echo br();
echo form_submit(null, 'OK');

echo form_close();
?>