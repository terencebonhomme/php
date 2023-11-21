<?php

function getMC2()
{
    return "Einstein";
}

// echo getMC2();

function getUserName(string $prenom, string $nom)
{
    return $prenom . $nom;
}

// echo getUserName('mickaël','dévoldère');

function getFullName(string $nom, string $prenom)
{
    return $prenom . " " . mb_strtoupper($nom);
}

// echo getFullName('dévoldère','mickaël');

function askUser(string $nom, string $prenom)
{
    echo "Bonjour " . getFullName($nom, $prenom) . ", connaissez-vous " . getMC2() . " ?";
}

// askUser('devoldère', 'mickaël'); 