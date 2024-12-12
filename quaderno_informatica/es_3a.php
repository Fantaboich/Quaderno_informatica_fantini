<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Raccolta e validazione dati
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $cognome = htmlspecialchars($_POST['cognome'] ?? '');
    $data_nascita = htmlspecialchars($_POST['data_nascita'] ?? '');
    $codice_fiscale = htmlspecialchars($_POST['codice_fiscale'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $cellulare = htmlspecialchars($_POST['cellulare'] ?? '');
    $indirizzo = [
        'via' => htmlspecialchars($_POST['via'] ?? ''),
        'cap' => htmlspecialchars($_POST['cap'] ?? ''),
        'comune' => htmlspecialchars($_POST['comune'] ?? ''),
        'provincia' => htmlspecialchars($_POST['provincia'] ?? ''),
    ];
    $nickname = htmlspecialchars($_POST['nickname'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');

    // Mostra i dati
    echo "<h1>Dati Inseriti</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cognome:</strong> $cognome</p>";
    echo "<p><strong>Data di Nascita:</strong> $data_nascita</p>";
    echo "<p><strong>Codice Fiscale:</strong> $codice_fiscale</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Cellulare:</strong> $cellulare</p>";
    echo "<p><strong>Indirizzo:</strong> {$indirizzo['via']}, {$indirizzo['cap']}, {$indirizzo['comune']}, {$indirizzo['provincia']}</p>";
    echo "<p><strong>Nickname:</strong> $nickname</p>";
    // La password non viene mostrata per sicurezza
} else {
    // Mostra il form
    echo "<h1>Gestione Anagrafica Utenti</h1>";
    echo "<form method='post' action=''>";

    // Nome
    echo "<label for='nome'>Nome (solo lettere e spazi):</label><br>";
    echo "<input type='text' id='nome' name='nome' pattern='[a-zA-Z\s]+' required><br><br>";

    // Cognome
    echo "<label for='cognome'>Cognome (solo lettere, spazi e apostrofi):</label><br>";
    echo "<input type='text' id='cognome' name='cognome' pattern="[a-zA-Z\s']+" required><br><br>";

    // Data di Nascita
    echo "<input type='text' id='cognome' name='cognome' pattern=\"[a-zA-Z\\s']+\" required><br><br>";

    echo "<input type='date' id='data_nascita' name='data_nascita' required><br><br>";

    // Codice Fiscale
    echo "<label for='codice_fiscale'>Codice Fiscale (opzionale):</label><br>";
    echo "<input type='text' id='codice_fiscale' name='codice_fiscale'><br><br>";

    // Email
    echo "<label for='email'>Email:</label><br>";
    echo "<input type='email' id='email' name='email' required><br><br>";

    // Cellulare
    echo "<label for='cellulare'>Cellulare (12 cifre, prefisso incluso):</label><br>";
    echo "<input type='tel' id='cellulare' name='cellulare' pattern='[0-9]{12}'><br><br>";

    // Indirizzo
    echo "<label>Indirizzo:</label><br>";
    echo "Via/Piazza: <input type='text' name='via' required><br>";
    echo "CAP: <input type='text' name='cap' pattern='[0-9]{5}' required><br>";
    echo "Comune: <input type='text' name='comune' required><br>";
    echo "Provincia: <input type='text' name='provincia' required><br><br>";

    // Nickname
    echo "<label for='nickname'>Nickname (diverso da nome e cognome):</label><br>";
    echo "<input type='text' id='nickname' name='nickname' required><br><br>";

    // Password
    echo "<label for='password'>Password (almeno 8 caratteri, 1 maiuscola, 1 numero, 1 speciale):</label><br>";
    echo "<input type='password' id='password' name='password' pattern='(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}' required><br><br>";

    echo "<button type='submit'>Invia</button>";
    echo "</form>";
}
?>