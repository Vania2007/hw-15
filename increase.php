<?php
function positive($value)
{
    return ($value > 0);
}

function product($array)
{
    return array_reduce($array, function ($s, $item) {
        return $s * $item;
    }, 1);
}

$arr = [-15, -5, 5, 6, 1, -2, -3, 0, 7, 12];
$allPositiveValuesOfArr = array_filter($arr, "positive");
echo product($allPositiveValuesOfArr);
