<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Benvenuto</title>
</head>
<body>
<h1>Esercizio 1b</h1> <br>
    <?php
        // Variabile con il nome
        $nome = "Paolo";

        // Ottieni l'ora attuale
        $ora = date("H"); // "H" restituisce l'ora in formato 24 ore (00 - 23)

        // Saluto in base all'ora
        if ($ora >= 8 && $ora < 12) {
            $saluto = "Buongiorno";
        } elseif ($ora >= 12 && $ora < 20) {
            $saluto = "Buonasera";
        } else {
            $saluto = "Buonanotte";
        }

        // Mostra il saluto
        echo "<p>$saluto $nome, benvenuto nella mia prima pagina PHP.</p>";

        // Ottieni il tipo di browser dell'utente
        $browser = $_SERVER['HTTP_USER_AGENT'];

        // Mostra il tipo di browser
        echo "<p>Stai usando il browser: $browser</p>";
    ?>
<br>
<a href="index.html"><button>Vai alla Pagina Principale</button></a>
</body>
</html>
