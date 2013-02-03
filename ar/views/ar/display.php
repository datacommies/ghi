<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');

?>
<div>
    <h1>Accounts Receivables</h1>
</div>
<table cols="" border="0">
    <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Status</th>
        <th>  </th>
    </tr>
    {customer}
    <tr>
        <td>{id}</td>
        <td>{name}</td>
        <td>{status}</td>
        <td><a href="/ar/manage/update/{id}">Update </a><a href="/ar/manage/delete/{id}">Delete</a></td>
    </tr>
    {/customer}
</table>
<div>
       <a href="/ar/manage/">Add Account</a>
</div>