<!DOCTYPE html> <!-- Definisce il tipo di documento come HTML5 -->
<html lang="it"> <!-- Inizio del documento HTML con lingua impostata su italiano -->
<head>
    <meta charset="UTF-8"> <!-- Imposta il set di caratteri su UTF-8 per supportare caratteri speciali -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Rende il sito responsive su dispositivi mobili -->
    <title>Tabella Pitagorica</title> <!-- Titolo della pagina visualizzato nella scheda del browser -->
</head>
<body>
<h1>Esercizio 1a</h1> <!-- Intestazione principale -->
 <br> <!-- Inserisce uno spazio tra gli elementi -->
    <h1>Tabella Pitagorica</h1> <!-- Secondo titolo per indicare il contenuto principale della pagina -->

    <?php
        // Definisce il range dei numeri per la tabella (1-10)
        $size = 10;

        // Inizio della tabella HTML con bordo, nessuno spazio tra le celle e padding interno
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        
        // Stampa la prima riga (intestazione della tabella)
        echo "<tr><td>X</td>"; // Cella vuota nell'angolo superiore sinistro
        for ($i = 1; $i <= $size; $i++) { // Ciclo per creare le intestazioni delle colonne
            echo "<td><strong>$i</strong></td>"; // Intestazione colonna con numeri da 1 a 10
        }
        echo "</tr>"; // Chiude la riga dell'intestazione
        
        // Stampa le righe della tabella con i valori della tabella pitagorica
        for ($i = 1; $i <= $size; $i++) { // Ciclo per le righe (numeri da 1 a 10)
            echo "<tr>"; // Inizio di una nuova riga
            echo "<td><strong>$i</strong></td>"; // Prima colonna con il numero di riferimento della riga
            for ($j = 1; $j <= $size; $j++) { // Ciclo per le colonne (numeri da 1 a 10)
                $result = $i * $j; // Calcola il prodotto dei due numeri
                echo "<td>$result</td>"; // Stampa il risultato nella cella corrispondente
            }
            echo "</tr>"; // Chiude la riga della tabella
        }
        

