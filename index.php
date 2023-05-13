<?php

// declaring an array with values:-
$number = [1, 4, 6];
// declaring an empty array:-
$result = [];
// print $number array:-
print_r($number);

// loop the $number array:-
for ($i = 0; $i < count($number)-1; $i++) {

    // "if" condition is for swaping the index values in array:-
    if ($number[$i] < $number[$i + 1]) {
        $a = $number[$i];
        $number[$i] = $number[$i + 1];
        $number[$i + 1] = $a;

        // pushing $number into array $result array:-
        $result[] = $number;

    }
    // print the array into the loop, beacuse out of the loop its not going to work:-
    print_r($number);
}


