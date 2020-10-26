<?php 

$words = $argv[1];

$pieces = explode(',', $words); //explode преобразование строки в массив


rsort($pieces); //сортировка по убыванию

$arr = implode(",", $pieces); //implode преобразование массива в строку

print_r($arr);



 ?>