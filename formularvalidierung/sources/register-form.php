<?php

$formFields = [
    'inputEmail4'    => [
        'required'    => true,
        'dataType'    => 'email',
    ],
    'inputPassword4' => [
        'required'    =>  true,
        'dataType'    => 'password',
        'min_len'     => 8
    ],
    'inputAddress'   => [
        'required'    => true,
        'dataType'    => 'string',
        'min_len'     => 5,
        'max_len'     => 40
    ],
    'inputAddress2'  => [
        'required'    => true,
        'dataType'    => 'string',
        'min_len'     => 2,
        'max_len'     => 40
    ],
    'inputZip'       => [
        'required'    => true,
        'dataType'    => 'int',
        'min_len'     => 4
    ],
    'inputCity'      => [
        'required'    => true,
        'dataType'    => 'string',
        'min_len'     => 2,
        'max_len'     => 20
    ],
    'inputState'      => [
        'required'    => true,
        'dataType'    => 'string'
    ],
    'checkbox'       => [
        'required'    => true,
        'dataType'    => 'string'
    ]
];

$errors = [];
$formOK = false;

if (!empty($_POST)) {
    foreach($formFields as $fieldName => $config) {

        $fieldVal = $_POST[$fieldName] ?? ''; 
        $fieldOK = false;
        
        // Required prüfen
        if ($config['required'] == true && checkRequired($fieldVal) == false) {
            $errors[$fieldName] = "$fieldName muss ausgefüllt werden.";

            continue;
        }
        
        $dataTypeOK = false;

        switch ($config['dataType']) {

            case 'int':
                if (checkInt($fieldVal) == false) {
                    $errors[$fieldName] = "$fieldName muss eine Ganzzahl enthalten.";
                }
                else {
                    $dataTypeOK = true;
                }
            break; 
            case 'email':
                if (checkEmail($fieldVal) == false) {
                    $errors[$fieldName] = "$fieldName muss eine E-Mail Adresse enthalten.";
                }
                else {
                    $dataTypeOK = true;
                }
            break;
            default: 
            
                $fieldVal = htmlspecialchars($fieldVal);
                $dataTypeOK = true;
        }
        
        if(!$dataTypeOK) {
            continue;
        }

        $min = $config['min'] ?? ''; 
        $max = $config['max'] ?? '';
        $min_len = $config['min_len'] ?? '';
        $max_len = $config['max_len'] ?? '';

        if ($min != '' && $max != '') {
            if ($fieldVal < $min || $fieldVal > $max) {
                $errors[$fieldName] = "$fieldName darf mindestens $min und höchstens $max sein.";
                continue;                
            }
        }
        
        if ($min != '') {
            if ($fieldVal < $min) {
                $errors[$fieldName] = "$fieldName muss mindestens $min sein.";
                continue;
            }
        }
        
        if ($max != '') {
            if ($fieldVal > $max) {
                $errors[$fieldName] = "$fieldName darf höchstens $max sein.";
                continue;
            }
        }

        if ($min_len != '' && $max_len != '') {
            if (strlen($fieldVal) < $min_len || strlen($fieldVal) > $max_len) {
                $errors[$fieldName] = "$fieldName muss mindestens $min_len und höchstens $max_len Zeichen enthalten.";
                continue;                
            }
        }
        
        if ($min_len != '') {
            if (strlen($fieldVal) < $min_len) {
                $errors[$fieldName] = "$fieldName muss mindestens $min_len Zeichen enthalten.";
                continue;
            }
        }

        if ($max_len != '') {
            if (strlen($fieldVal) > $max_len) {
                $errors[$fieldName] = "$fieldName darf höchstens $max_len Zeichen enthalten.";
                continue;
            }
        }
    }

    if (empty($errors)) {
        $formOK = true;
    }
}
