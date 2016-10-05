<?php

$a = 0;
$b = 42 / $a;

function divide($a) {
    if ($a == 0) {
        throw new Exception("Division by zero!");
    }
    return 42 / $a;
}

echo divide(2) . "\n";
//echo divide(0) . "\n";


try {
    echo divide(2) . "\n";
    echo divide(0) . "\n";
} catch (Exception $exception) {
    echo $exception->getMessage();
}
