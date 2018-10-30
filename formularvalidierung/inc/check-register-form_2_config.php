<?php
$formFields = [
    // nur required
    'inputEmail4' => [
        'required' => true,
        'dataType' => 'name'
    ],
    'inputAddress' => [
        'required' => true,
        'dataType' => 'name'
    ]
];

/* 
    Formular validieren
*/
if (!empty($_POST)) {
    echo export($_POST);
    foreach($formFields as $fieldName => $config) {
        /* 
            Null coalescing operator: wenn $fieldName nicht in POST: '' als Wert
            if / else Kurzform
            Wert des abgeschickten Feldes auslesen.
        */
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