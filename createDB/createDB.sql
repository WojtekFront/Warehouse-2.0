CREATE DATABASE IF NOT EXISTS Warehouse;

CREATE TABLE IF NOT EXISTS zgloszenia (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    tytul_zgl VARCHAR(100),
    autor_zgl VARCHAR(30),
    aktywne_zgl TINYINT(1),
    data_zgl DATETIME,
    kolejnosc_zgl INT(11),
    priorytet_zgl TINYINT(1)
);

CREATE TABLE IF NOT EXISTS zgloszenia_odpowiedz(
    id INT AUTO INCREMENT PRIMARY KEY,
    id_zgloszenia INT(11),
    autor_odp VARCHAR(30),
    tekst_odpowiedzi VARCHAR(700)

    
)