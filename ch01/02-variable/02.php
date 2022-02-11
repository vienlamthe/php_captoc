<?php
    $firstName = "Tien";
    $lastName  = "Le";
    $fullName = $firstName . " " . $lastName;
    $number = 89;

    // in ra thông tin của biến gồm kiểu dữ liệu của biến và giá trị.
    var_dump($fullName);

    // check type of the variables
    echo gettype($number);
    echo gettype($fullName); 
?>