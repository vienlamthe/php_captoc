<?php

$name = "evan";
$case_1 = " evan ";
$case_2 = "hello guys";

// nối chuỗi bằng dấu chấm
echo 'Hello' . $name;

// lấy độ dài string
$lenStr = strlen($name); // 4

// trim
$trimStr = trim($case_1);
$trimLeftStr = ltrim($case_1);
$trimRightStr = rtrim($case_1);

// đảo string
$revStr = strrev($name); // nave

// in hoa cả str - in thường cả str
$upperStr = strtoupper($name);
$lowerStr = strtolower($name);

// cắt string từ vị trí A đến B
$subStr = substr($name, 3);

// cắt bỏ 1 đoạn string và thay thế nó bằng 1 đoạn string khác
$k = substr_replace($name, 'haha', 0);

// thay thế string - trick: dùng regex sẽ nhanh hơn khi xử lý complex problem
$repStr = str_replace("guys", "everyone", $case_2);

// repeat string
$reStr = str_repeat("*");

// cắt chuỗi thành từng element
$splitStr = chunk_split("freetuts.net", 1, "-"); // f-r-e-e-t-u-t-s-.-n-e-t-

// chuyển string thành array
$convertArrayStr = str_split($name); // ['e', 'v', 'a', 'n']

