<?php
session_start();

// Credenziali predefinite
$utente_correto = "admin";
$password_corretta = "password123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $utente = $_POST['utente'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($utente === $utente_correto && $password === $password_corretta) {
        // Credenziali corrette: reindirizza alla pagina riservata
        $_SESSION['loggedin'] = true;
        header("Location: area_riservata.php");
        exit();
    } else {
        // Credenziali errate: reindirizza alla pagina di errore
        header("Location: errore.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
    <form method="post" action="">
        <label for="utente">Utente:</label>
        <input type="text" id="utente" name="utente" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
    <a href="index.html"><button>Vai alla Pagina Principale</button></a>
</body>
</html>