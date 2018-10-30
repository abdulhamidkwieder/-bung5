<?php

/**
 * formatiertes var_dump
 * 
 * @param mixed $val
 */
function dump($val) {
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}

/**
 * formatiertes var_export
 * 
 * @param mixed $val
 * @return string
 */
function export($val) {
    $out = '';
    $out .= '<pre>';
    // zweiter Parameter true: String als Rückgabe, sonst wie echo
    $out .= var_export($val, true);
    $out .= '</pre>';

    return $out;
}

/**
 * Prüft, ob $val einen Leerwert enthält
 */
function checkRequired ($val) {
    if ($val == '' || $val == null) {
        return false;
    }

    return true;
}

/**
 * Prüfen, ob eine valide Ganzzahl übergeben wurde
 *
 * @param mixed $val
 * @return boolean
 */
function checkInt($val) {
    if ( filter_var($val, FILTER_VALIDATE_INT) == false ) {
        return false;
    }

    return true;
}

/**
 * Prüfen, ob valide E-Mail Adresse übergeben wurde
 *
 * @param mixed $val
 * @return boolean
 */
function checkEmail($val) {
    if ( filter_var($val, FILTER_VALIDATE_EMAIL) == false ) {
        return false;
    }

    return true;
}

function checkString($val) {
    if ( filter_var($val, FILTER_VALIDATE_STRING) == false ) {
        return false;
    }

    return true;
}

/**
 * Prüfen, ob eine valide Gleitkommazahl übergeben wurde
 *
 * @param mixed $val
 * @return boolean
 */
function checkFloat($val) {
    if ( filter_var($val, FILTER_VALIDATE_FLOAT) == false ) {
        return false;
    }

    return true;
}
