<?php

$array1 = [
    0 => 'a',
    1 => 'b',
    2 => 'c'
];

$array2 = [
    3 => 'd',
    4 => 'e'
];

$array3 = ['a', 'c' , 'b'];

$result = $array1 + $array2;
var_dump($array1 == $array3);  //true
var_dump($array1 === $array3);  //false
var_dump($result);

