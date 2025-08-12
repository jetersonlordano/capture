<?php

$line = '';
foreach ($_POST ?? [] as $key => $value) {
    $line .= "{$value}\n";
}

function pswGenerator($data)
{

    $clean = array_map(function ($vlr) {
        return preg_replace('/[^A-Za-z0-9]/', '', trim(strtolower($vlr)));
    }, $data);

    $passwords = [];

    foreach ($data as $key => $value) {

        foreach ($data as $keyI => $valueI) {
            if ($key != $keyI) {
                $passwords[] = $clean[$key] . $clean[$keyI];
            }
        }
    }

    return array_unique($passwords);
}

$psw = pswGenerator($_POST);

foreach ($psw as $key => $value) {
    $line .= "{$value}\n";
}

file_put_contents("files/wordlist.txt", $line, FILE_APPEND);

echo 'Arquivo criado em: ' . __DIR__ .  '/files/wordlist.txt';
