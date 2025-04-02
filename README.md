# Quaderno_informatica_fantini
# Guida all'installazione e all'utilizzo del quaderno di informatica

Per installare il progetto, bisogna innanzitutto scaricarlo in una cartella sul proprio dispositivo. Una volta fatto, è necessario installare XAMPP, un software che permette di gestire un server locale. Dopo aver completato l'installazione, si deve avviare XAMPP e attivare i server Apache e MySQL, operazione fondamentale per il corretto funzionamento del progetto.

Successivamente, è necessario accedere a phpMyAdmin cliccando su "Admin" accanto a MySQL oppure digitando `localhost/phpmyadmin` nel browser. In questa pagina sono visibili tutti i database presenti nel sistema. A questo punto, per configurare il database del progetto, bisogna importare il file `.sql` corrispondente, così da caricare tutti i dati necessari.

Dopo aver caricato il database, è importante configurare correttamente le credenziali di accesso. Per farlo, si deve entrare nella cartella di XAMPP, individuare la directory phpMyAdmin e aprire il file `config.inc.php`. Qui è necessario modificare la password, impostandola su "admin", e il nome utente, che deve essere cambiato in "user". Questa operazione garantisce il corretto accesso al database.

Completata la configurazione, si deve spostare la cartella del progetto all'interno della directory `htdocs` di XAMPP. Dopo aver eseguito questa operazione, bisogna riavviare XAMPP e assicurarsi che Apache e MySQL siano attivi. Per visualizzare il progetto nel browser, è sufficiente digitare `localhost/nome_cartella`, sostituendo "nome_cartella" con il nome esatto della cartella in cui è stato salvato il progetto.

Una volta completati tutti questi passaggi, il progetto sarà pronto per essere utilizzato senza ulteriori configurazioni.

