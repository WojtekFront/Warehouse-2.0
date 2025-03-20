CREATE DATABASE IF NOT EXISTS Warehouse;

CREATE TABLE IF NOT EXISTS zgloszenia (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    tytul_zgl VARCHAR(100),
    autor_zgl VARCHAR(30),
    aktywne_zgl TINYINT(1),
    data_zgl DATETIME DEFAULT CURRENT_TIMESTAMP,
    kolejnosc_zgl INT(11),
    priorytet_zgl TINYINT(1),
    zrodlo_zgl VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS zgloszenia_odpowiedzi(
    id INT AUTO INCREMENT PRIMARY KEY,
    id_zgloszenia INT(11),
    autor_odp VARCHAR(30),
    tekst_odp VARCHAR(700),
    data_odp DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_zgloszenia) REFERENCES zgloszenia(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS users(
    id INT AUTO INCREMENT PRIMARY KEY,
    imie_user VARCHAR(20),
    nazwisko_user VARCHAR(20),
    email_user VARCHAR(20),
    haslo_user VARCHAR(20),
    telefon_user VARCHAR (15),
    aktywny_user TINYINT(2) DEFAULT 0,
    uprawnienia_user TINYINT(2) DEFAULT 0,
    dzial_user TINYINT(2) DEFAULT 0
)