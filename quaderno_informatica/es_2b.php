<?php
session_start();

// Credenziali predefinite
$utente_correto = "admin";
$password_corretta = "password123";

// Variabili per gestire i messaggi
$errore = "";
$messaggio = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utente = $_POST['utente'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($utente === $utente_correto && $password === $password_corretta) {
        // Credenziali corrette
        $messaggio = "Benvenuto, hai effettuato l'accesso correttamente!";
    } else {
        // Credenziali errate
        $errore = "Credenziali errate. Riprova.";
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
    <?php if (!empty($messaggio)): ?>
        <h1><?php echo htmlspecialchars($messaggio); ?></h1>
    <?php else: ?>
        <h1>Login</h1>
        <?php if (!empty($errore)): ?>
            <p style="color: red;"><?php echo htmlspecialchars($errore); ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <label for="utente">Utente:</label>
            <input type="text" id="utente" name="utente" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
        <a href="index.html"><button>Vai alla Pagina Principale</button></a>
    <?php endif; ?>
</body>
</html>
