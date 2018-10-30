<?php
$formFields = [
    'inputEmail4' => [
        'required' => true,
        'dataType' => 'email'
    ],
    'inputPassword4' => [
        'required' => true,
        'dataType' => 'password'
    ],
    'inputAddress' => [
        'required' => true,
        'dataType' => 'string'
    ],
    'inputAddress2' => [
        'required' => true,
        'dataType' => 'string'
    ],
    'inputZip' => [
        'required' => true,
        'dataType' => 'string'
    ],
    'inputCity' => [
        'required' => true,
        'dataType' => 'string'
    ],
    'checkbox' => [
        'required' => true,
        'dataType' => 'checkbox'
    ],
    'inputState' => [
        'required' => true,
        'dataType' => 'string'
    ]
];

/* 
    Formular validieren
*/
if (!empty($_POST)) {
    echo export($_POST);
    foreach($formFields as $fieldName => $config) {

        $fieldVal = $_POST[$fieldName] ?? ''; 
        // wird am Schluss, wenn alle Validierungen OK sind, auf true gesetzt
        $fieldOK = false;
        $errorMsg = '';
        
        // Required prüfen?
        if ($config['required'] == true) {
            $fieldOK = checkRequired($fieldVal);
        }
        else {
            $fieldOK = true;
        }
        dump($fieldOK);
    }
}