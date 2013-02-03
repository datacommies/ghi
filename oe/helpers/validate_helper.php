<?php

/**
 * Function validate_date checks to see if the date of invoice
 * follows the format yyyy.mm.dd. Note that the month cannot exceed 
 * over 12 and the days cannot exceed over 31.
 * 
 * @param type $date
 * @return type
 */
function validate_date($date)
{
    $pattern = "/^[0-9]{4}.(0[1-9]|1[0-2]).(0[1-9]|[1-2][0-9]|3[0-1])$/";
    return preg_match($pattern, $date);
}

/**
 * Function validate_ID checks to see if the invoice ID has 3 digits.
 * 
 * @param type $id
 * @return type 
 */
function validate_ID($id)
{
    $pattern = "/^[0-9]{3}$/";
    return preg_match($pattern, $id);
}

/**
 * Function validate_status checks to see if the status is 'A'
 * for active or 'D' for disabled.
 * 
 * @param type $status
 * @return type 
 */
function validate_status($status)
{
    $pattern = "/^[A,D]$/";
    return preg_match($pattern, $status);
}

?>
