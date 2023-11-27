<?php
//подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "english";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// SQL-запрос
$sql = "SELECT * FROM promo_prices";
$result = $conn->query($sql);

// Перебор данных
$info = array();
while ($row = $result->fetch_assoc()) {
    $info[] = $row;
}

// Закрытие соединения с базой данных
$conn->close();
