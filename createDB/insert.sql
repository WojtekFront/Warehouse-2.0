INSERT INTO users (imie_user, nazwisko_user, email_user, haslo_user, telefon_user, aktywny_user, uprawnienia_user, dzial_user) VALUES
('Jan', 'Kowalski', 'jan.kowal@ex.pl', 'haslo123', '5000000001', 1, 1, 1),
('Anna', 'Nowak', 'anna.nowak@ex.pl', 'tajne321', '5000000002', 1, 0, 2),
('Tomasz', 'Wiśniewski', 't.wisnia@ex.pl', 'pass456', '5000000003', 1, 1, 1),
('Zofia', 'Kaczmarek', 'z.kaczma@ex.pl', 'abc123', '5000000004', 1, 0, 3),
('Michał', 'Dąbrowski', 'michal.dab@ex.pl', 'xyz987', '5000000005', 1, 0, 2);

INSERT INTO zgloszenia (tytul_zgl, autor_zgl, aktywne_zgl, kolejnosc_zgl, priorytet_zgl, zrodlo_zgl) VALUES
('Błąd logowania do systemu', 0, 1, 1, 1, 'Email'),
('Nie działa drukarka w dziale 2', 'Anna Nowak', 3, 1, 0, 'Telefon'),
('Zgłoszenie błędu w raporcie', 'Tomasz Wiśniewski', 1, 3, 1, 'Formularz');

INSERT INTO zgloszenia_odpowiedzi (id_zgloszenia, autor_odp, id_users, tekst_odp) VALUES
(1, 0, 4, 'Czy próbowałeś zresetować hasło?'),
(1, 0, 2, 'Tak, ale nie działa.'),
(1, 0, 5, 'Sprawdzimy logi i damy znać.'),
(1, 0, 4, 'Problem rozwiązany. Logowanie działa.');

INSERT INTO zgloszenia_odpowiedzi (id_zgloszenia, autor_odp, id_users, tekst_odp) VALUES
(2, 0, 2, 'Drukarka nie reaguje na polecenia.'),
(2, 0, 5, 'Sprawdź połączenie z siecią.'),
(2, 0, 2, 'Połączenie OK. Dalej nie działa.'),
(2, 0, 4, 'Wyślemy technika na miejsce.');

INSERT INTO zgloszenia_odpowiedzi (id_zgloszenia, autor_odp, id_users , tekst_odp) VALUES
(3, 0, 1, 'W raporcie są złe dane dla marca.'),
(3, 0, 2, 'Zaraz to sprawdzę.'),
(3, 0, 2, 'Masz rację, był błąd w zapytaniu SQL.'),
(3, 0, 1, 'Dzięki, teraz wygląda dobrze.'),
(3, 0, 4, 'Zamykam zgłoszenie jako rozwiązane.');




