
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = intval($_POST['numero'] ?? 0);

    if ($numero >= 1 && $numero <= 10) {
        // Genera la tabella
        echo "<h1>Tabella di quadrati e cubi</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

        for ($i = 1; $i <= $numero; $i++) {
            $quadrato = $i * $i;
            $cubo = $i * $i * $i;
            echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='color: red;'>Il numero inserito non è valido. Ricarica la pagina e scegli un valore tra 1 e 10.</p>";
    }
} else {
    // Mostra il form
    echo "<h1>Inserisci un numero</h1>";
    echo "<form method='post' action=''>";
    echo "<label for='numero'>Seleziona un numero (1-10):</label>";
    echo "<select id='numero' name='numero' required>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<option value='$i'>$i</option>";
    }

    echo "</select><br><br>";
    echo "<button type='submit'>Crea tabella</button>";
    echo "</form>";
  
}
?>
<!DOCTYPE html>

<body>
<a href="index.html"><button>Vai alla Pagina Principale</button></a>


</body>
</html>