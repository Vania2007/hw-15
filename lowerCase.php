<?php
function to_lower_case_array($array)
{
    return array_map(function ($value) {
        return strtolower($value);
    }, $array);
}
function concatenate_el($array)
{
    return array_reduce($array, function ($carry, $item) {
        return $carry === '' ? $item : $carry . '-' . $item;
    }, '');
}
$arr = ['A', 'suNNy', 'DAY', 'at', 'tHe', 'Beach', 'was', 'perfect', 'foR', 'a', 'walk', 'fOr', 'two'];
$lower_case_array = to_lower_case_array($arr);
$concatenated_str = concatenate_el($lower_case_array);
echo $concatenated_str;
