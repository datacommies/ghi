<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/ap/welcome.php
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
    </tr>
    {vendors}
    <tr>
        <td>{id}</td>
        <td>{name}</td>
        <td>{status}</td>
        <td><a href="/ap/add_vendor/update/{id}">Update</a>&nbsp;<a href="/ap/add_vendor/delete/{id}">Delete</a>
    </tr>
    {/vendors}
</table>