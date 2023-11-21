<?php

function firstItem(array $arr)
{
    if (count($arr) == 0) {
        return null;
    }

    return $arr[0];
}

function lastItem(array $arr)
{
    if (count($arr) == 0) {
        return null;
    }

    return $arr[count($arr) - 1];
}

function sortItem(array $arr): array
{
    if (count($arr) == 0) {
        return array();
    }

    arsort($arr);

    return $arr;
}

function stringItems(array $arr): string
{
    if (count($arr) == 0) {
        return "Nothing to display";
    }

    asort($arr);

    return implode(", ", $arr);
}

$names = [];
// echo stringItems($names);

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
echo stringItems($names);
