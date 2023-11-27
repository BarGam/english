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


$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// Проверка наличия заполненных данных
if (empty($name) || empty($phone) || empty($email)) {
    echo "Заполните все поля формы.";
} else {
    // Проверка наличия данных в базе
    $checkQuery = "SELECT * FROM applications WHERE name = '$name' AND phone = '$phone' AND email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo "<script>alert('Данные уже существуют в базе');</script> ";
    } else {
        // Добавление данных в базу
        $insertQuery = "INSERT INTO applications (name, phone, email) VALUES ('$name', '$phone', '$email')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('Данные успешно добавлены в базу данных');</script>";
        } else {
            "<script>alert('Ошибка: " . $conn->error . "');</script>";
        }
    }
}

$conn->close();