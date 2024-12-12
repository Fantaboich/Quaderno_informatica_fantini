<!-- area_riservata.php -->
<?php
// Pagina protetta
session_start();
if (empty($_SESSION['loggedin'])) {
    header("Location: login.php"); // Reindirizza al login se non autenticato
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Riservata</title>
</head>
<body>
    <h1>Sei entrato nell'area riservata!</h1>
    <p>Benvenuto!</p>
</body>
</html>