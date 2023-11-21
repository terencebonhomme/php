<?php

function stringLength(string $str): bool
{
    return strlen($str) >= 9;
}

function upperCaseLetter(string $str): bool
{
    return preg_match("~[A-Z]+~", $str);
}

function lowerCaseLetter(string $str): bool
{
    return preg_match("~[a-z]+~", $str);
}

function digit(string $str): bool
{
    return preg_match("~[0-9]+~", $str);
}

function noAlphaNumeric(string $str): bool
{
    return preg_match('/[^a-z0-9]+/i', $str);
}

function passwordCheck(string $password): bool
{
    return stringLength($password) && upperCaseLetter($password) && lowerCaseLetter($password) && digit($password) && noAlphaNumeric($password);
}

function userLogin($name, $password, $users): bool
{
    if(array_key_exists($name, $users) && $users[$name] == $password){
        return true;
    };

    return false;
}

$users = [
    'joe' => 'Azer1234!',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer',
];

var_dump(userLogin('jack', 'Azer1234!', $users));
