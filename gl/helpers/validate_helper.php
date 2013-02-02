<?php
    /* Validate the ID and status helpers. */ 
    function validate_id( $id ) {
        if (preg_match('/^[0-9]{3}$/', $id) )
                return true;
        return false;        
    }
    function validate_status( $status ) {
        if (preg_match('/^[A,D]$/', $status) )
                return true;
        return false;        
    }
?>
