<?php
$message = "Тип услуги: " . $_POST['service_name'] . "\n" . "Итого: " . $_POST['total'] . "\n" . "Ваши данные: " . $_POST['name'] . " " . $_POST['phone'] . " " . $_POST['mail'] . "\n" . " " . date("Y-m-d H:i:s");
$to = $_POST['mail'];
$sub = 'Order';
$from = 'toropov99@gmail.com';
mail($to, $sub, $message, $from);
header("Location: basket.php");
