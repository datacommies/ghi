<?php
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

/* End of file validate_helper.php */
/* Location: application/helpers/validate_helper.php */