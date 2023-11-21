<?php

function isMajor(int $age): bool
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}

// var_dump(isMajor(18));

// echo isMajor(12) . PHP_EOL;
// echo isMajor(18) . PHP_EOL;
// echo isMajor(42);

function getRetired(int $age): string
{
    $ageRetraite = 60;

    if ($age < 0) {
        return "vous n'êtes pas encore né";
    } elseif ($age < $ageRetraite) {
        return "il vous reste " . ($ageRetraite - $age) . " avant la retraite";
    } elseif ($age == $ageRetraite) {
        return "vous êtes à la retraite cette année";
    } else {
        return "vous êtes à la retraite depuis " . ($age - $ageRetraite) . " ans";
    }
}

// echo getRetired(12);
// echo getRetired(60);
// echo getRetired(72);
// echo getRetired(-2);

function getMax(float $a, float $b, float $c)
{
    $res = 0;

    if ($a == $b || $b == $c || $c == $a) {
        return $res;
    }

    // a b c
    // a c b
    // b a c
    // b c a
    // c a b
    // c b a


    if ($a > $b) {
        // a b c
        // a c b
        if ($a > $c) {
            $res = $a;
            // c a b
        } else {

            $res = $c;
        }
    } else {
        // b c a
        // b a c
        if ($b > $c) {
            $res = $b;
            // c b a
        } else {
            $res = $c;
        }
    }

    return number_format($res, 3);
}

// echo getMax(1.2345, 2.2345, 3.2345) . PHP_EOL;
// echo getMax(1.2345, 3.2345, 2.2345) . PHP_EOL;
// echo getMax(2.2345, 1.2345, 3.2345) . PHP_EOL;
// echo getMax(2.2345, 3.2345, 1.2345) . PHP_EOL;
// echo getMax(3.2345, 1.2345, 2.2345) . PHP_EOL;
// echo getMax(3.2345, 2.2345, 1.2345);

function capitalCity(string $pays): string
{
    switch ($pays) {
        case 'France':
            return 'Paris';
            break;
        case 'Allemagne':
            return 'Berlin';
            break;
        case 'Italie':
            return 'Rome';
            break;
        case 'Maroc':
            return 'Rabat';
            break;
        case 'Espagne':
            return 'Madrid';
            break;
        case 'Portugal':
            return 'Lisbonne';
            break;
        case 'Angleterre':
            return 'Londres';
            break;
        default:
            return 'Capitale inconnue';
            break;
    }
}

echo capitalCity('Portugal');


