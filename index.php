<?php
// Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.

function repeatStr($n, $str)
{
    return str_repeat($str, $n);
}

/* 
Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.
 The output should be two capital letters with a dot separating them.
 It should look like this:
 Sam Harris => S.H
 patrick feeney => P.F
 */

function abbrevName($name)
{
    $parts = explode(' ', $name);
    $initials = '';

    foreach ($parts as $part) {
        $initials .= substr($part, 0, 1) . '.';
    }

    $initials = rtrim($initials, '.');
    $uppercase_string = strtoupper($initials);

    return $uppercase_string;
}

/*
Nathan loves cycling.

Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.

You get given the time in hours and you need to return the number of litres Nathan will drink, rounded to the smallest value.

For example:

time = 3 ----> litres = 1

time = 6.7---> litres = 3

time = 11.8--> litres = 5
*/

function litres(float $t): int
{
    return floor($t * 0.5);
}

/*
A hero is on his way to the castle to complete his mission. However, he's been told that the castle is surrounded with a couple of powerful dragons! each dragon takes 2 bullets to be defeated, our hero has no idea how many bullets he should carry.. Assuming he's gonna grab a specific given number of bullets and move forward to fight another specific given number of dragons, will he survive?
Return true if yes, false otherwise :)
*/

function hero(int $bullets, int $dragons): bool
{
    if ($bullets >= $dragons * 2) {
        return true;
    } else {
        return false;
    }
}

/*
It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry about strings with less than two characters.
*/

function remove_char(string $s): string
{
    $s = substr($s, 1);
    $s = substr($s, 0, -1);
    return $s;
}
