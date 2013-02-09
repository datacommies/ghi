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

/**
 * Does a regex match to validate the format of a vendor id
 * 
 * @param (string) $vendor_id The vendor id to validate
 * @return (boolean) True if the vendor id is valid
 */
function validate_vendor_id($id) {
    return preg_match('/^\d{3}$/', $id);
}

/**
 * Validates the format of a vendor status
 * 
 * @param (string) $status  The status to validate
 * @return (boolean) True if the status is valid
 */
function validate_vendor_status($status) {
    return $status == 'a' || $status == 'A' || $status == 'd' || $status == 'D';
}

/**
 * Validate the format of a customer name
 * 
 * */
function validate_name($name) {
    return preg_match('/^[A-Za-z]/', $name) === 1;
}

?>
