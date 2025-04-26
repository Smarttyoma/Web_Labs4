<?php
$str = "m5n12p308"; // Придуманная строка (Вариант 21, Заменить числа на сумму их цифр)
$regexp = "/[0-9]+/"; // Находим все числа

$result = preg_replace_callback(
    $regexp,
    function ($matches) {
        return array_sum(str_split($matches[0])); // Считаем сумму цифр
    },
    $str
);

echo $result;
?>
