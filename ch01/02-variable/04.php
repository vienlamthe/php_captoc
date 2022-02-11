<?php
    $age = 21;
    // kiểm tra giá trị của biến có phải là số hoặc một chuỗi gồm các chữ số hay không => return boolean

    echo is_numeric("abc"); // true
    echo is_numeric(12); // true

    // kiểm tra giá trị có phải là string hay không => return boolean
    echo is_string("superman"); // true

    // kiểm tra các kiểu dữ liệu khác
    echo is_bool(false);
    echo is_int(12);
    echo is_null(null);

    // kiểm tra biến có được defined hay chưa? => return boolean
    isset($name); // false
    isset($age); // true
?>