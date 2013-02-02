<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/homepage.php
 *
 * Present the welcome page body.
 * Yes, I probably should have used CSS, but a table is so easy.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
?>
<table cols="" border="0">
    <tr>
        <th>ID</th>
        <th>Account Name</th>
        <th>Status</th>
    </tr>
    {accounts}
    <tr>
        <td>{id}</td>
        <td>{accname}</td>
        <td>{status}</td>
    </tr>
    {/accounts}
</table>