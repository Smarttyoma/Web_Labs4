<?php
session_start();

if (isset($_SESSION["event_name"]) && isset($_SESSION["event_date"]) && isset($_SESSION["event_location"])) {
    $eventName = $_SESSION["event_name"];
    $eventDate = $_SESSION["event_date"];
    $eventLocation = $_SESSION["event_location"];

    echo "Название события: $eventName <br>";
    echo "Дата проведения: $eventDate <br>";
    echo "Место проведения: $eventLocation";
} else {
    echo "Нет данных о событии в сессии.";
}
?>
