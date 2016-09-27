<?php

$team = [
    "mosstud" => "Mikael Roos",
    "lew" => "Kenneth Lewenhagen",
];

print_r($team);


$team["zeldah"] = "Andreas Arnesson";
$team["efo"] = "Emil Folino";
print_r($team);



$mosstud = [
    "name" => "Mikael Roos",
    "city" => "Bankeryd",
];

$lew = [
    "name" => "Kenneth Lewenhagen",
    "city" => "Karlskrona",
];

$team = [
    "mosstud" => $mosstud,
    "lew" => $lew,
];

print_r($team);


print($team["mosstud"]["name"]);
print($team["lew"]["name"]);


$pages = [
    "home"  => "incl/default.php",
    "about" => "incl/about.php",
];
$somekey = "home";
$page = isset($pages[$somekey])
    ? $pages[$somekey]
    : null;
print($page);
