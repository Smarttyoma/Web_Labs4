<?php
session_start();

$_SESSION["event_name"] = $_POST["event_name"];
$_SESSION["event_date"] = $_POST["event_date"];
$_SESSION["event_location"] = $_POST["event_location"];

echo "Данные о событии сохранены в сессии!";
?>
