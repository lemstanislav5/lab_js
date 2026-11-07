<?php
    // Создаем и заполняем массив 10 случайными числами от 1 до 100
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand(1, 100);
    }

    echo "Созданный массив: " . implode(", ", $array) . "<br><br>";

    $productOfEvenIndices = 1;
    $oddIndexElements = [];

    foreach ($array as $index => $value) {
        if ($value > 0) {
            // Проверяем индекс на четность (парность)
            if ($index % 2 == 0) {
                $productOfEvenIndices *= $value;
            } else {
                // Собираем элементы с нечетными индексами для вывода
                $oddIndexElements[] = "[Индекс $index] => $value";
            }
        }
    }

    echo "Произведение элементов с четными (парными) индексами: " . $productOfEvenIndices . "<br><br>";
    echo "Элементы с нечетными (не парными) индексами:<br>" . implode("<br>", $oddIndexElements);
?>
