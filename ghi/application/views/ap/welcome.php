<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/ap/home.php
 *
 * Present the welcome page body.
 *
 * @author		Dennis Ho
 * ------------------------------------------------------------------------
 */
?>
<table cols="" border="0">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    {vendors}
    <tr>
        <td>{id}</td>
        <td>{name}</td>
        <td>{status}</td>
        <td><a href="/ap/add_vendor/update/{id}">Update</a></td>
        <td><a href="/ap/add_vendor/delete/{id}">Delete</a></td>
    </tr>
    {/vendors}
</table>

<?php
$this->load->helper('form');
echo form_open('/add_vendor');
echo form_submit('', 'Add Vendor');
echo form_close();
?>