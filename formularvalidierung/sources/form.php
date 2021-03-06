<?php
$errors = [
    'emailAdresse'    => '',
    'passwort'    => ''
];

$loginOK = false;

// Prüfen, ob posted wurde (ist $_POST not empty)
if (!empty($_POST)) {
    echo export($_POST);

    // Hilfsvariablen
    $uname = $_POST['emailAdresse'];
    $pw = $_POST['passwort'];
    // username ist false bis er bewiesen hat, dass er passt
    $unameOK = false;
    $pwOK = false;

    // required check
    if (checkRequired($uname)) {
        if ('aaa@gmail.com' == $uname) {
            $unameOK = true;
        }
        else {
            // WICHTIG: Login Formulare sollten nur eine generelle Fehlermeldung ausgeben. Zu Übungszwecken geben wir verschiedene aus.
            $errors['emailAdresse'] = '<p class="msg-error">Email ist nicht korrekt</p>';
        }
    }
    else {
        $errors['emailAdresse'] = '<p class="msg-error">Email wurde nicht ausgefüllt</p>';
    }

    //Passwort prüfen
    if ($unameOK == true) {
        if (checkRequired($pw)) {
            if ('123456' == $pw) {
                $pwOK = true;
            }
            /*  TODO: löschen, wenn wir online gehen */
            else {
                $errors['passwort'] = '<p class="msg-error">Passwort nicht korrekt</p>';
            }
        }
        else {
            $errors['passwort'] = '<p class="msg-error">Passwort wurde nicht ausgefüllt</p>';
        }
    }

    // Nur wenn beide Felder valide sind, wird loginOK auf true gesetzt.
    if ($unameOK && $pwOK) {
        $loginOK = true;
    }
}