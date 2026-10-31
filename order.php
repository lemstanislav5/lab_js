<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Результат заказа</title>
</head>
<body>

<?php
// 1. Прием данных из формы
// Используем оператор ?? (null coalescing), чтобы избежать ошибок, если поле не передано
$product = $_POST["product"] ?? '';
$material = $_POST["material"] ?? '';
$quantity = $_POST["quantity"] ?? '';

// 2. Проверка данных
// Проверяем, что поля не пустые и количество больше 0
$error = false;

if (empty($product) || empty($material) || empty($quantity)) {
    $error = true;
    echo "<h3>Ошибка: Заполнены не все поля!</h3>";
} elseif (!is_numeric($quantity) || $quantity <= 0) {
    $error = true;
    echo "<h3>Ошибка: Количество должно быть положительным числом!</h3>";
}

// 3. Вывод результата или ссылки на возврат
if ($error) {
    // Если есть ошибка, предлагаем исправить
    echo '<p><a href="index.html">Вернуться и исправить</a></p>';
} else {
    // Если ошибок нет, выводим сообщение
    echo "<h3>Ваш заказ принят</h3>";
    
    // Формируем таблицу для красивого вывода (как в задании)
    echo "<table border='0' cellpadding='5'>";
    echo "<tr><td>Заказано изделие</td><td>- $product</td></tr>";
    echo "<tr><td>Материал</td><td>- $material</td></tr>";
    echo "<tr><td>Количество</td><td>- $quantity</td></tr>";
    echo "</table>";
    
    echo '<p><a href="index.html">Сделать новый заказ</a></p>';
}
?>

</body>
</html>