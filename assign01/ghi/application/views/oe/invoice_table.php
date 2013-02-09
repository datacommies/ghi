<?php
/**
 * Loads invoice table in a proper format.
 * 
 * By Luke Tao and Kevin Tangeman 
 */

?>
<h1>Invoice Data</h1>
<table cols="" border="0">
    <tr>
        <th>InvoiceID</th>
        <th>CustName</th>
        <th>Status</th>
        <th>Date</th>
    </tr>
    {invoices}
    <tr>
        <td>{InvoiceID}</td>
        <td>{CustName}</td>
        <td>{Status}</td>
        <td>{InvoiceDate}</td>
    </tr>
    {/invoices}
</table>