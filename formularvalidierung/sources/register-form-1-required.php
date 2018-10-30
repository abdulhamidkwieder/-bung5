<?php
$formFields = [
    // nur required
    'inputEmail4'       => true,
    'inputPassword4'    => true,
    'inputAddress'      => true,
    'inputAddress2'     => true,
    'inputZip'          => true,
    'inputCity'         => true,  
    'checkbox'          => true, 
    'inputState'        => true  
];

if (!empty($_POST)) {
    echo export($_POST);
    foreach($formFields as $fieldName => $val) {
        
        $fieldVal = $_POST[$fieldName] ?? ''; 
        $fieldOK = false;
        
        // Required prüfen?
        if ($val == true) {
            $fieldOK = checkRequired($fieldVal);
        }
        else {
            $fieldOK = true;
        }
        dump($fieldOK);
    }
}