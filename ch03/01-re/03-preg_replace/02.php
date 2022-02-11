
<?php 
    $content = file('script.txt') or die("Cannot read file!");
    $content = implode("", $content);

    $pattern     = array('#<script([^>]*)>#i', '#</script([^>]*)>#i');
    $replacement = array('<pre>&lt;script\\1&gt;', '&lt;/script\\1&gt;</pre>');

    $result = preg_replace($pattern, $replacement, $content);       // Tìm kiếm & thay thế nội dung

    echo $result;