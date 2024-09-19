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
