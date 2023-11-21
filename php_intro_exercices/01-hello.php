<?php

function helloWorld(): void
{
    echo "Hello World !";
}

// helloWorld();

function hello(string $name): string
{
    if ($name == "") {
        return "Nobody";
    }

    return "Hello $name";
}

// echo hello("Mike");