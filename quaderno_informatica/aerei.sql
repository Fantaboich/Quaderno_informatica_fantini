-- Creazione del database COMPAGNIA_AEREA
CREATE DATABASE COMPAGNIA_AEREA;
USE COMPAGNIA_AEREA_Fantini;

-- Creazione della tabella AEROPORTO
CREATE TABLE AEROPORTO (
    Citta VARCHAR(100) PRIMARY KEY,
    Nazione VARCHAR(100) NOT NULL,
    NumPiste INT NOT NULL
);

-- Creazione della tabella AEREO
CREATE TABLE AEREO (
    TipoAereo VARCHAR(50) PRIMARY KEY,
    NumPasseggeri INT NOT NULL,
    QtaMerci DECIMAL(10,2) NOT NULL
);

-- Creazione della tabella VOLO
CREATE TABLE VOLO (
    IdVolo INT PRIMARY KEY,
    GiornoSett VARCHAR(15) NOT NULL,
    CittaPart VARCHAR(100) NOT NULL,
    OraPart TIME NOT NULL,
    CittaArr VARCHAR(100) NOT NULL,
    OraArr TIME NOT NULL,
    TipoAereo VARCHAR(50) NOT NULL,
    FOREIGN KEY (CittaPart) REFERENCES AEROPORTO(Citta),
    FOREIGN KEY (CittaArr) REFERENCES AEROPORTO(Citta),
    FOREIGN KEY (TipoAereo) REFERENCES AEREO(TipoAereo)
);

-- Popolamento della tabella AEROPORTO
INSERT INTO AEROPORTO (Citta, Nazione, NumPiste) VALUES
('Roma', 'Italia', 3),
('Parigi', 'Francia', 4),
('Londra', 'Regno Unito', 5);

-- Popolamento della tabella AEREO
INSERT INTO AEREO (TipoAereo, NumPasseggeri, QtaMerci) VALUES
('Boeing 737', 180, 2000.50),
('Airbus A320', 160, 1800.75),
('Boeing 747', 400, 5000.00);

-- Popolamento della tabella VOLO
INSERT INTO VOLO (IdVolo, GiornoSett, CittaPart, OraPart, CittaArr, OraArr, TipoAereo) VALUES
(1, 'Lunedì', 'Roma', '08:00:00', 'Parigi', '10:00:00', 'Boeing 737'),
(2, 'Martedì', 'Parigi', '11:30:00', 'Londra', '12:30:00', 'Airbus A320'),
(3, 'Mercoledì', 'Londra', '14:00:00', 'Roma', '16:00:00', 'Boeing 747');
