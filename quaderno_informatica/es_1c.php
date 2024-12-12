<!DOCTYPE html>
<lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli con Asterischi</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<h1>Esercizio 1b</h1> <br>

    <h1>Triangoli con Asterischi</h1>

    <?php
        // (a) Triangolo con asterischi crescenti
        echo "<h3>Triangolo a) Crescente:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            // Aggiungi gli asterischi
            echo str_repeat('*', $i);
            // Vai alla riga successiva
            echo '<br>';
        }

        echo "<br>";

        // (b) Triangolo con asterischi decrescenti
        echo "<h3>Triangolo b) Decrescente:</h3>";
        for ($i = 10; $i >= 1; $i--) {
            // Aggiungi gli asterischi
            echo str_repeat('*', $i);
            // Vai alla riga successiva
            echo '<br>';
        }

        echo "<br>";

        // (c) Triangolo specchiato con asterischi decrescenti
        echo "<h3>Triangolo c) Specchiato Decrescente:</h3>";
        for ($i = 10; $i >= 1; $i--) {
            // Aggiungi gli spazi
            echo str_repeat('&nbsp;', 10 - $i);
            // Aggiungi gli asterischi
            echo str_repeat('*', $i);
            // Vai alla riga successiva
            echo '<br>';
        }

        echo "<br>";

        // (d) Triangolo specchiato con asterischi crescenti
        echo "<h3>Triangolo d) Specchiato Crescente:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            // Aggiungi gli spazi
            echo str_repeat('&nbsp;', 10 - $i);
            // Aggiungi gli asterischi
            echo str_repeat('*', $i);
            // Vai alla riga successiva
            echo '<br>';
        }
    ?>



<br>
<a href="index.html"><button>Vai alla Pagina Principale</button></a>
</body>
</html>
