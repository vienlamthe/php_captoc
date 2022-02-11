<?php

// round -> làm tròn số gần nhất
$b = round(4.5); // 5
$c = round(4.4999); // 4

// ceil -> làm tròn lên
$a = ceil(4.3); // 5

// floor -> làm tròn xuống
$a2 = floor(4.3); // 4

// can bac hai
$d = sqrt(4); // 2

// tạo 1 số ngẫu nhiên
$e = rand();

// tạo số ngẫu nhiên từ 1 đến 10
$f = rand(1, 10);

// giá trị tuyệt đối
$g = abs(-9); // 9

// tìm max
$h = max(2,3); // 3

// tìm min
$j = min(5, 11); // 5

// formatting number
$number = 123414.212356;
$r = number_format($number, 2, ',', ''); // 123414,21