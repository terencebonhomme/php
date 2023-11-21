<?php

function getSum(int $a, int $b) : int
{
    return $a + $b;
}

// echo getSum(5, 3);

function getSub(int $a, int $b) : int
{
    return $a - $b;
}

// echo getSub(5, 3) . PHP_EOL;
// echo getSub(3, 5);

function getMulti(float $a, float $b) : float
{
    return $a * $b;
}

// echo getMulti(5.6, 3);

function getDiv(int $a, int $b) : float
{
    if($b == 0){
        return 0;
    }

    return number_format($a / $b, 2);    
}

// echo getDiv(20, 3) . PHP_EOL;
// echo getDiv(20, 0);