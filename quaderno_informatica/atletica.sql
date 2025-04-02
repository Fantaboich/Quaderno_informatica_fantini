-- Creazione del database
CREATE DATABASE atletica;
USE atletica;

-- Tabella gare
CREATE TABLE gare (
    ID_gara INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    citta VARCHAR(50) NOT NULL,
    data DATE NOT NULL
);

-- Tabella squadre
CREATE TABLE squadre (
    ID_squadra INT PRIMARY KEY AUTO_INCREMENT,
    descrizione VARCHAR(100) NOT NULL,
    citta VARCHAR(50) NOT NULL,
    nazione VARCHAR(50) NOT NULL
);

-- Tabella categorie
CREATE TABLE categorie (
    ID_categoria INT PRIMARY KEY AUTO_INCREMENT,
    descrizione VARCHAR(50) NOT NULL
);

-- Tabella atleti
CREATE TABLE atleti (
    ID_atleta INT PRIMARY KEY AUTO_INCREMENT,
    cognome VARCHAR(50) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    indirizzo VARCHAR(100),
    cod_fiscale CHAR(16) UNIQUE,
    data_nascita DATE NOT NULL,
    sesso CHAR(1) CHECK (sesso IN ('M', 'F')),
    ID_squadra INT,
    ID_categoria INT,
    FOREIGN KEY (ID_squadra) REFERENCES squadre(ID_squadra),
    FOREIGN KEY (ID_categoria) REFERENCES categorie(ID_categoria)
);

-- Tabella ammonizioni
CREATE TABLE ammonizioni (
    ID_ammonizione INT PRIMARY KEY AUTO_INCREMENT,
    ID_gara INT NOT NULL,
    ID_atleta INT NOT NULL,
    FOREIGN KEY (ID_gara) REFERENCES gare(ID_gara),
    FOREIGN KEY (ID_atleta) REFERENCES atleti(ID_atleta)
);

-- Tabella atleti_gare (molti a molti)
CREATE TABLE atleti_gare (
    ID_atleta INT NOT NULL,
    ID_gara INT NOT NULL,
    PRIMARY KEY (ID_atleta, ID_gara),
    FOREIGN KEY (ID_atleta) REFERENCES atleti(ID_atleta),
    FOREIGN KEY (ID_gara) REFERENCES gare(ID_gara)
);

-- Popolamento delle tabelle
INSERT INTO squadre (descrizione, citta, nazione) VALUES
('Podistica Roma', 'Roma', 'Italia'),
('Atletica Milano', 'Milano', 'Italia'),
('Corridors Bologna', 'Bologna', 'Italia'),
('Runners Napoli', 'Napoli', 'Italia');

INSERT INTO categorie (descrizione) VALUES
('Senior'),
('Junior'),
('Master'),
('Esordienti');

INSERT INTO atleti (cognome, nome, indirizzo, cod_fiscale, data_nascita, sesso, ID_squadra, ID_categoria) VALUES
('Rossi', 'Mario', 'Via Roma 1, Milano', 'RSSMRA80A01F205X', '1980-01-01', 'M', 1, 1),
('Bianchi', 'Luigi', 'Via Milano 2, Roma', 'BNCLGU82B02F205Y', '1982-02-02', 'M', 2, 1),
('Verdi', 'Anna', 'Via Napoli 3, Bologna', 'VRDANN85C03F205Z', '1985-03-03', 'F', 3, 2),
('Neri', 'Laura', 'Via Bologna 4, Napoli', 'NRELRA88D04F205W', '1988-04-04', 'F', 4, 3);

INSERT INTO gare (nome, citta, data) VALUES
('Maratona di Roma', 'Roma', '2023-04-10'),
('Mezza maratona di Milano', 'Milano', '2023-05-15'),
('10 km di Bologna', 'Bologna', '2023-06-20'),
('5 km di Napoli', 'Napoli', '2023-07-25');

INSERT INTO atleti_gare (ID_atleta, ID_gara) VALUES
(1, 1), (1, 2), (2, 1), (2, 3), (3, 2), (3, 4), (4, 1), (4, 4);

INSERT INTO ammonizioni (ID_gara, ID_atleta) VALUES
(1, 1), (1, 2), (2, 3);