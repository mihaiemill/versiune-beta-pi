<?php
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "quiz_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

$username = "admin";
$password = "admin"; // În practică, folosiți hash pentru parolă
$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$passwordHashed')";

if ($conn->query($sql) === TRUE) {
    echo "Utilizatorul 'admin' a fost creat cu succes.";
} else {
    echo "Eroare la crearea utilizatorului: " . $conn->error;
}

$conn->close();
?>
