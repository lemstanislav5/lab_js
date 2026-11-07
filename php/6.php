<?php
    // Входная строка с ФИО
    $fullName = "Иванов Иван Петрович";

    // Разделяем строку на массив слов по пробелам
    $parts = explode(" ", trim($fullName));
    $lastName = $parts[0];  // Фамилия
    $firstName = $parts[1]; // Имя
    $middleName = $parts[2];// Отчество

    // Берем первую букву имени и отчества, переводим в верхний регистр и добавляем точку
    // Используем mb_substr для корректной работы с кириллицей
    $initName = mb_strtoupper(mb_substr($firstName, 0, 1)) . ".";
    $initMiddle = mb_strtoupper(mb_substr($middleName, 0, 1)) . ".";

    // Собираем итоговую строку: Фамилия И. П.
    $shortName = "$lastName $initName $initMiddle";

    echo "Исходные данные: $fullName <br>";
    echo "Результат: $shortName"; 
?>
