<?php
// Configurazione dei parametri per la connessione al database MySQL
$servername = "localhost";  // Indirizzo del server (in questo caso, locale)
$username = "root";         // Nome utente del database (default per MySQL)
$password = "";             // Password del database (vuota in questo caso)
$database = "COMPAGNIA_AEREA";  // Nome del database a cui connettersi

// Creazione della connessione al database usando l'estensione MySQLi
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se la connessione ha avuto successo
if ($conn->connect_error) {
    // Se la connessione fallisce, termina lo script e mostra l'errore
    die("Connessione fallita: " . $conn->connect_error);
}

// Variabile per memorizzare l'output della query (HTML)
$queryOutput = "";

// Verifica se il form è stato inviato con metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera la query SQL inserita dall'utente
    $query = $_POST['query'];
    
    // Esegue la query sul database
    $result = $conn->query($query);
    
    // Aggiunge la query eseguita all'output
    $queryOutput .= "<p><strong>Query:</strong> $query</p>";
    
    // Gestisce il risultato della query
    if ($result === TRUE) {
        // Se la query è un comando SQL senza risultati (es. INSERT, UPDATE, DELETE)
        $queryOutput .= "<p>Query eseguita con successo.</p>";
    } elseif ($result->num_rows > 0) {
        // Se la query restituisce dei risultati (es. SELECT)
        // Crea una tabella HTML per visualizzare i dati
        $queryOutput .= "<table border='1'><tr>";
        
        // Aggiunge le intestazioni della tabella (nomi delle colonne)
        while ($field = $result->fetch_field()) {
            $queryOutput .= "<th>{$field->name}</th>";
        }
        $queryOutput .= "</tr>";
        
        // Aggiunge le righe della tabella con i dati
        while ($row = $result->fetch_assoc()) {
            $queryOutput .= "<tr>";
            foreach ($row as $value) {
                $queryOutput .= "<td>$value</td>";
            }
            $queryOutput .= "</tr>";
        }
        $queryOutput .= "</table>";
    } else {
        // Se la query non restituisce risultati
        $queryOutput .= "<p>Nessun risultato trovato.</p>";
    }
    
    // Salva l'output in un file HTML (append mode)
    file_put_contents("query.html", $queryOutput, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Database</title>  <!-- Titolo della pagina -->
</head>
<body>
    <h2>Esegui una Query</h2>
    <!-- Form per inserire la query SQL -->
    <form method="post">
        <textarea name="query" rows="5" cols="50" placeholder="Scrivi la tua query SQL qui..."></textarea><br>
        <input type="submit" value="Esegui">  <!-- Pulsante di invio -->
    </form>
    
    <h2>Risultato della Query</h2>
    <!-- Area dove viene mostrato l'output della query -->
    <div>
        <?php echo $queryOutput; ?>
    </div>
</body>
</html>

