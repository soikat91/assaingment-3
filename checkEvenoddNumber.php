<?php
/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
*/

function checkEvenOdd($number)
{

    if ($number % 2 == 0) {
        return "{$number} is Even number";
    } else {
        return "{$number} is Odd number";
    }   

}

$result = checkEvenOdd(9);
echo $result;
