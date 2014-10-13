<?php

if ('POST' == strtoupper($_SERVER['REQUEST_METHOD'])) {
    header('Content-type: application/json; charset=utf-8');

    // spam protection
    if (!empty($_POST['address']) && !empty($_POST['password'])) {
        die(json_encode([
            'message' => 'Fejl i den indtastede formular, se herunder.',
            'status'  => false,
        ]));
    }

    // validation
    $errors = [];

    if (empty($_POST['name'])) {
        $errors['name'] = 'Indtast venligst dit navn.';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['email']) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Den indtastede email adresse er ikke gyldig.';
    }

    if (count($errors)) {
        die(json_encode([
            'errors'  => $errors,
            'message' => 'Fejl i den indtastede formular, se herunder.',
            'status'  => false,
        ]));
    }

    // build and send mail
    $company = empty($_POST['company'])
        ? 'n/a'
        : $_POST['company'];

    $phone =  empty($_POST['phone'])
        ? 'n/a'
        : $_POST['phone'];

    $date    = date('d/m Y H:i');
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $package = $_POST['package'];

    $message = "Hej

En henveldelse fra decreto.dk ang. en konto.

Dato: {$date}

Navn...: {$name}
E-mail.: {$email}
Telefon: {$phone}
Firma..: {$company}
Pakke..: {$package}

--".' '."
mvh decreto robotten
";

    $to      = 'hello@decreto.dk';
    $from    = 'hello@decreto.dk';
    $headers = [
        'From: '.$from,
        'Return-Path: '.$from,
        'Errors-To: '.$from,
    ];

    if (mail($to, 'signup fra decreto.dk', $message, implode("\r\n", $headers), '-f'.$from)) {
        die(json_encode([
            'message' => 'Tak for din henveldelse.',
            'status'  => true,
        ]));
    }

    die(json_encode([
        'message' => 'Kunne ikke sende meddelelsen.',
        'status'  => false,
    ]));
}
