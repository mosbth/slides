<?php

$mumin1 = ["Mumintrollet", "är", 7, "år", true, false, null];
$mumin2 = [
    "Mumintrollet",
    "är",
    7,
    "år",
    true,
    false,
    null
];

var_dump($mumin1);
print_r($mumin2);


foreach ($mumin1 as $part) {
    echo "$part ";
}

// positional, count
$items = count($mumin1);
print($items);

// mutable
echo "\n---\n";
$mumin1[2] = 42;
$mumin1[10] = "Muminhuset";
$items = count($mumin1);
print($items);
var_dump($mumin1);

// peoples collection of people
$pelle = ["Pelle", 22];
$mats  = ["Mats", 25];
$eva   = ["Eva", 25];
$klass = [$pelle, $mats, $eva];
var_dump($klass);

$klass[1][1] = 42;
var_dump($klass);

// luffarschack, en dimensionell array
$game = [
    " ", "O", "X",
    " ", "X", "O",
    "X", "O", " ",
];
//var_dump($game);

echo <<<EOD
-------
|$game[0]|$game[1]|$game[2]|
-------
|$game[3]|$game[4]|$game[5]|
-------
|$game[6]|$game[7]|$game[8]|
-------
EOD;


// luffarschack, två dimensionell array
$game = [
    [" ", "O", "X",],
    [" ", "X", "O",],
    ["X", "O", " ",],
];
//var_dump($game);

echo "\n";
echo <<<EOD
-------
|{$game[0][0]}|{$game[0][1]}|{$game[0][2]}|
-------
|{$game[1][0]}|{$game[1][1]}|{$game[1][2]}|
-------
|{$game[2][0]}|{$game[2][1]}|{$game[2][2]}|
-------
EOD;
