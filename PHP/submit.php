<?php
$servername = "mysql";
$username = "root";
$password = "TK12345";
$dbname = "bira_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$amount = $_POST['amount'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$home_address = $_POST['home_address'];

$sql = "INSERT INTO order_user (name, amount, phone_number, email, home_address) VALUES ('$name', '$amount', '$phone_number', '$email', '$home_address')";
if ($conn->query($sql) === TRUE) {
    echo "Поръчката е успешна :)";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
