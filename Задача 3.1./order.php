<?php
    header('Content-Type: application/json');
    // Прием данных (если JSON присылают через POST-параметр 'data')
    $json_string = $_POST["data"] ?? '';

    // Декодируем. Если JSON битый или пустой, $data станет пустым массивом []
    $data = json_decode($json_string, true) ?? [];

    // Защита от пустой деструктуризации: проверяем, что это массив и в нем есть элементы
     if (!is_array($data) || count($data) < 3) {
        echo json_encode(['status' => 'error', 'message' => 'Неверный формат данных! ' . count($data) . "  " . (string)is_array($data)], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Деструктуоризация данных
    [
        'product'  => $product,
        'material' => $material,
        'amount'   => $amount
    ] = $data;

    // Проверка данных
    // Проверяем, что поля не пустые и количество больше 0
    if (empty($product) || empty($material) || empty($amount)) {
        $response = ['status' => 'error', 'message' => 'Данные введены не в полном объеме!'];
    } else {
        $response = ['status' => 'success', 'message' => "Заказ принят!\nЗаказано изделие: " . $product . "\nМатериал: " . $material . "\nКоличество: " . $amount];
    }
    echo json_encode($response, JSON_UNESCAPED_UNICODE); 
?>