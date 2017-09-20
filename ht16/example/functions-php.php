<?php

/**
 * Example
 */
function doit()
{
    $tot = 41 + 1;
    print($tot);
}

doit();



function doit1($num)
{
    $tot = 1 + $num;
    print($tot);
}

doit1(41);



function doit2($num1, $num2 = 40)
{
    $tot = 1 + $num1 + $num2;
    print($tot);
}

doit2(1);
doit2(2, 39);



function doit3($num, &$tot)
{
    $tot = 1 + $num;
}

$tot = 0;
doit3(41, $tot);
print($tot);



function doit4($num)
{
    return 1 + $num;
}

$tot = doit4(41);
print($tot);



function doit5($num)
{
    static $tot = 0;
    $tot += $num;
    print($tot);
}

doit5(40);
doit5(2);



function doit6(...$nums)
{
    $tot = 0;
    foreach ($nums as $num) {
        $tot += $num;
    }
    return $tot;
}

$tot = doit6(1, 2, 3, 5, 6, 7, 8, 9, 1);
print($tot);


$tot = array_sum([1, 2, 3, 5, 6, 7, 8, 9, 1]);
print($tot);


$base=40;

function doit9($num)
{
    global $base;
    $base += $num;
}

doit9(2);
print("\n" . $base);
