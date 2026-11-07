<?php
    $number = "s44215d875575545";
    $digit = "5";

    // Считаем количество вхождений символа в строку
    $count = substr_count((string)$number, (string)$digit);

    echo "Цифра $digit в числе $number встречается $count раза"; 
?>
