<!DOCTYPE html> <!-- Definisce il documento come HTML5 -->
<html lang="it"> <!-- Inizio del documento HTML con lingua impostata su italiano -->
<head>
    <meta charset="UTF-8"> <!-- Imposta la codifica dei caratteri su UTF-8 per supportare caratteri speciali -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Rende la pagina responsive su dispositivi mobili -->
    <title>Pagina di Benvenuto</title> <!-- Titolo della pagina visualizzato nella scheda del browser -->
</head>
<body>
<h1>Esercizio 1b</h1> <br> <!-- Intestazione principale con spazio sotto -->

    <?php
        // Definisce una variabile con il nome
        $nome = "Paolo";

        // Ottiene l'ora attuale
        $ora = date("H"); // "H" restituisce l'ora in formato 24 ore (00 - 23)

        // Determina il saluto in base all'orario
        if ($ora >= 8 && $ora < 12) { // Se l'ora è tra le 8 e le 11:59
            $saluto = "Buongiorno";
        } elseif ($ora >= 12 && $ora < 20) { // Se l'ora è tra le 12 e le 19:59
            $saluto = "Buonasera";
        } else { // Se l'ora è tra le 20 e le 7:59
            $saluto = "Buonanotte";
        }

        // Stampa il saluto personalizzato con il nome
        echo "<p>$saluto $nome, benvenuto nella mia prima pagina PHP.</p>";

        // Ottiene il tipo di browser dell'utente
        $browser = $_SERVER['HTTP_USER_AGENT'];

        // Stampa il tipo di browser in uso
        echo "<p>Stai usando il browser: $browser</p>";
    ?>
<br> <!-- Spazio tra il testo e il pulsante -->
<a href="index.html"><button>Vai alla Pagina Principale</button></a> <!-- Pulsante per tornare alla pagina principale -->
</body>
</html>

