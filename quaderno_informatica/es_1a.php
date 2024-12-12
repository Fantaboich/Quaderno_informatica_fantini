<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
</head>
<body>
<h1>Esercizio 1a</h1>
 <br>
    <h1>Tabella Pitagorica</h1>

    <?php
        // Definisce il range dei numeri per la tabella (1-10)
        $size = 10;

        // Inizio della tabella
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        
        // Stampa la prima riga (intestazione della tabella)
        echo "<tr><td>X</td>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<td><strong>$i</strong></td>";
        }
        echo "</tr>";
        
        // Stampa le righe della tabella (moltiplicazioni)
        for ($i = 1; $i <= $size; $i++) {
            echo "<tr>";
            echo "<td><strong>$i</strong></td>"; // Prima colonna con il moltiplicando
            for ($j = 1; $j <= $size; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>"; // Risultato della moltiplicazione
            }
            echo "</tr>";
        }
        
        // Fine della tabella
        echo "</table>";
    ?>
 <br>
 <a href="index.html"><button>Vai alla Pagina Principale</button></a>
</body>
</html>
