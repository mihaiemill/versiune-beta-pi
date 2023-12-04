<?php
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "quiz_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

$sql = "SELECT * FROM intrebari";
$result = $conn->query($sql);
$intrebari = [];

while($row = $result->fetch_assoc()) {
    array_push($intrebari, $row);
}

echo json_encode($intrebari);

$conn->close();
?>
