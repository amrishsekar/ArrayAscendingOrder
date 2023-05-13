<?php

$number = [1, 4, 2];
$result = [];

for ($i = 0; $i < count($number)-1; $i++) {

    if ($number[$i] < $number[$i + 1]) {
        $a = $number[$i];
        $number[$i] = $number[$i + 1];
        $number[$i + 1] = $a;

        $result[] = $number;

    }
    print_r($number);
}


