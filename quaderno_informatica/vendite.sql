-- Creazione del database
CREATE DATABASE vendite_Fantini;
USE vendite;

-- Tabella citta
CREATE TABLE citta (
    ID_citta INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    CAP VARCHAR(10) NOT NULL,
    regione VARCHAR(50) NOT NULL
);

-- Tabella clienti
CREATE TABLE clienti (
    ID_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    indirizzo VARCHAR(100) NOT NULL,
    cod_fiscale VARCHAR(16) UNIQUE,
    partita_iva VARCHAR(11) UNIQUE,
    ID_citta INT,
    FOREIGN KEY (ID_citta) REFERENCES citta(ID_citta)
);

-- Tabella categoria
CREATE TABLE categoria (
    ID_categoria INT PRIMARY KEY AUTO_INCREMENT,
    descrizione VARCHAR(50) NOT NULL
);

-- Tabella articoli
CREATE TABLE articoli (
    ID_articolo INT PRIMARY KEY AUTO_INCREMENT,
    descrizione VARCHAR(100) NOT NULL,
    prezzo_unitario DECIMAL(10,2) NOT NULL,
    ID_categoria INT,
    FOREIGN KEY (ID_categoria) REFERENCES categoria(ID_categoria)
);

-- Tabella fatture
CREATE TABLE fatture (
    ID_fattura INT PRIMARY KEY AUTO_INCREMENT,
    ID_cliente INT NOT NULL,
    data DATE NOT NULL,
    num_fattura VARCHAR(20) UNIQUE NOT NULL,
    importo DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (ID_cliente) REFERENCES clienti(ID_cliente)
);

-- Tabella dettagli
CREATE TABLE dettagli (
    ID_dettaglio INT PRIMARY KEY AUTO_INCREMENT,
    ID_articolo INT NOT NULL,
    ID_fattura INT NOT NULL,
    quantita INT NOT NULL,
    FOREIGN KEY (ID_articolo) REFERENCES articoli(ID_articolo),
    FOREIGN KEY (ID_fattura) REFERENCES fatture(ID_fattura)
);

-- Popolamento delle tabelle
INSERT INTO citta (nome, CAP, regione) VALUES
('Roma', '00100', 'Lazio'),
('Milano', '20100', 'Lombardia'),
('Napoli', '80100', 'Campania'),
('Torino', '10100', 'Piemonte'),
('Firenze', '50100', 'Toscana');

INSERT INTO clienti (nome, indirizzo, cod_fiscale, partita_iva, ID_citta) VALUES
('Mario Rossi', 'Via Roma 1', 'RSSMRA80A01F205X', '12345678901', 1),
('Luigi Bianchi', 'Via Milano 2', 'BNCLGU82B02F205Y', '23456789012', 2),
('Anna Verdi', 'Via Napoli 3', 'VRDANN85C03F205Z', '34567890123', 3),
('Laura Neri', 'Via Torino 4', 'NRELRA88D04F205W', '45678901234', 4),
('Paolo Gialli', 'Via Firenze 5', 'GLLPLA90E05F205V', '56789012345', 5);

INSERT INTO categoria (descrizione) VALUES
('Elettronica'),
('Abbigliamento'),
('Alimentari'),
('Arredamento'),
('Sport');

INSERT INTO articoli (descrizione, prezzo_unitario, ID_categoria) VALUES
('Smartphone', 599.99, 1),
('Tablet', 299.99, 1),
('Maglietta', 29.99, 2),
('Pantaloni', 49.99, 2),
('Vino', 19.99, 3),
('Formaggio', 9.99, 3),
('Sedia', 89.99, 4),
('Tavolo', 199.99, 4),
('Scarpe running', 79.99, 5),
('Palla da calcio', 39.99, 5);

INSERT INTO fatture (ID_cliente, data, num_fattura, importo) VALUES
(1, '2021-03-15', 'F2021/001', 629.98),
(2, '2021-04-20', 'F2021/002', 349.98),
(3, '2021-05-25', 'F2021/003', 79.98),
(4, '2021-06-30', 'F2021/004', 289.97),
(5, '2021-12-20', 'F2021/005', 119.97),
(1, '2022-01-10', 'F2022/001', 199.99),
(2, '2022-02-15', 'F2022/002', 59.98);

INSERT INTO dettagli (ID_articolo, ID_fattura, quantita) VALUES
(1, 1, 1), (2, 1, 1),
(3, 2, 2), (4, 2, 2),
(5, 3, 4),
(6, 4, 3), (7, 4, 1),
(8, 5, 1), (9, 5, 1),
(10, 6, 1),
(3, 7, 2);