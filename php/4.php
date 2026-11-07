<?php
    // Создаем и заполняем массив 10 случайными числами от 1 до 100
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand(1, 100);
    }

    echo "Исходный массив: " . implode(", ", $array) . "<br>";

    // Находим индексы минимального и максимального элементов
    $minIndex = array_search(min($array), $array);
    $maxIndex = array_search(max($array), $array);

    echo "Минимум: " . $array[$minIndex] . " (индекс $minIndex)<br>";
    echo "Максимум: " . $array[$maxIndex] . " (индекс $maxIndex)<br>";

    // Меняем их местами через третью переменную
    $temp = $array[$minIndex];
    $array[$minIndex] = $array[$maxIndex];
    $array[$maxIndex] = $temp;

    echo "Массив после перестановки: " . implode(", ", $array);
?>
