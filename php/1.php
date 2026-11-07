<?php
    // Пример числа
    $number = 123; 
    $originalNumber = $number;
    $sum = 0;

    // Разбираем число на цифры, пока оно не станет равным 0
    while ($number > 0) {
        $sum += $number % 10; // Получаем последнюю цифру
        $number = (int)($number / 10); // Убираем последнюю цифру
    }

    echo "Сумма цифр числа $originalNumber равна: $sum"; 
?>
