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


// It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry about strings with less than two characters.


function remove_char(string $s): string
{
    $s = substr($s, 1);
    $s = substr($s, 0, -1);
    return $s;
}

// Write function RemoveExclamationMarks which removes all exclamation marks from a given string.

function remove_exclamation_marks($string)
{
    return str_replace('!', '', $string);
}


/*
Complete the solution so that it reverses the string passed into it.

'world'  =>  'dlrow'
'word'   =>  'drow'
*/

function solution($str)
{
    return strrev($str);
}


/*
Description:
Can you find the needle in the haystack?

Write a function findNeedle() that takes an array full of junk but containing one "needle"

After your function finds the needle it should return a message (as a string) that says:

"found the needle at position " plus the index it found the needle, so:

Example(Input --> Output)

["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5" 
*/

function findNeedle($haystack)
{
    for ($i = 0; $i < count($haystack); $i++) {
        if ($haystack[$i] === "needle") {
            return "found the needle at position " . $i;
        }
    }
}

/*
Given an array of integers, return a new array with each value doubled.

For example:

[1, 2, 3] --> [2, 4, 6]
*/

function maps($x)
{
    $result = [];
    foreach ($x as $value) {
        $result[] = $value * 2;
    }
    return $result;
}

/*
Bob needs a fast way to calculate the volume of a cuboid with three values: the length, width and height of the cuboid. Write a function to help Bob with this calculation.
*/

function get_volume_of_cuboid($length, $width, $height)
{
    $volume = $length * $width * $height;
    return $volume;
}

/*
Our football team has finished the championship.

Our team's match results are recorded in a collection of strings. Each match is represented by a string in the format "x:y", where x is our team's score and y is our opponents score.

For example: ["3:1", "2:2", "0:1", ...]

Points are awarded for each match as follows:

if x > y: 3 points (win)
if x < y: 0 points (loss)
if x = y: 1 point (tie)
We need to write a function that takes this collection and returns the number of points our team (x) got in the championship by the rules given above.

Notes:

our team always plays 10 matches in the championship
0 <= x <= 4
0 <= y <= 4
*/

function points(array $games): int
{
    $total_points = 0;
    foreach ($games as $game) {
        list($x, $y) = explode(":", $game);
        if ($x > $y) {
            $total_points += 3;
        } elseif ($x < $y) {
            $total_points += 0;
        } else {
            $total_points += 1;
        }
    }
    return $total_points;
}
