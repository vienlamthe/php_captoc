<?php
    $number = 12.34;

    // ép kiểu cách 1
    // echo (int)$number;

    // ép kiểu cách 2 - chỉ định 1 kiểu dữ liệu cho 1 biến cụ thể
    settype($number, "integer");
    echo $number;
?>