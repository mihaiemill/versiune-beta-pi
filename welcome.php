<?php
session_start();

// Verificați dacă utilizatorul este autentificat. Dacă nu, redirecționați la pagina de login.
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}

// Conținutul paginii de întâmpinare
echo "<h1>Bine ați venit, " . $_SESSION['username'] . "!</h1>";
echo "<p>Acesta este un dashboard simplu. Puteți adăuga aici orice conținut doriți.</p>";
echo "<a href='quiz.html'>Începe Quiz-ul</a><br>";
echo "<a href='addQuestions.php'>Adaugă Întrebări în Baza de Date</a><br>";
echo "<a href='addAdmin.php'>Adaugă Admin</a><br>";
echo "<a href='index.html'>Logout</a>";
?>
