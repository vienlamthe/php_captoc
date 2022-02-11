<?php

$fruits = ['apple', 'banana', 'mango', 'cherry'];

// kiểm tra phần tử bằng index có tồn tại trong array => return boolean
isset($fruits[4]); // false

// độ dài của array
echo count($fruits); // 4

// thêm phần tử vào cuối array
array_push($fruits, 'peach');

// thêm phẩn tử vào đầu array
array_unshift($fruits, 'foo');

// ghép các element trong array thành 1 string
echo implode("&", $fruits); // apple&banana&mango&cherry

// kiểm tra element có tồn tại trong array => return boolean
echo in_array('banana', $fruits); // true

// tìm kiếm element trong array => return index
echo array_search('mango', $fruits); // 2

// gộp 2 array lại với nhau
$arr_2 = ['mía', 'dưa hấu', 'cà chua'];
$way_2 = [...$fruits, ...$arr_2];
echo array_merge($fruits, $arr_2);
echo $way_2;

// sorting array
echo sort($fruits);