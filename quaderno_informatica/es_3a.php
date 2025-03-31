<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Dati Inseriti</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
    echo "<p><strong>Cognome:</strong> " . htmlspecialchars($_POST['cognome']) . "</p>";
    echo "<p><strong>Data di Nascita:</strong> " . htmlspecialchars($_POST['data_nascita']) . "</p>";
    echo "<p><strong>Codice Fiscale:</strong> " . htmlspecialchars($_POST['codice_fiscale']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Cellulare:</strong> " . htmlspecialchars($_POST['cellulare']) . "</p>";
    echo "<p><strong>Indirizzo:</strong> " . htmlspecialchars($_POST['via']) . ", " . htmlspecialchars($_POST['cap']) . ", " . htmlspecialchars($_POST['comune']) . ", " . htmlspecialchars($_POST['provincia']) . "</p>";
    echo "<p><strong>Nickname:</strong> " . htmlspecialchars($_POST['nickname']) . "</p>";
} else {
    echo "<p>Errore: Nessun dato ricevuto.</p>";
}
?>