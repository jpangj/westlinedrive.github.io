<?php
// CLEAN FORM DATA TO PREVENT INJECTIONS
function validateFormData($formData) {
    $formData = trim( stripslashes ( htmlspecialchars ( strip_tags ( str_replace( array('(', ')'), '', $formData ) ), ENT_QUOTES ) ) );
    return $formData;
}

?>