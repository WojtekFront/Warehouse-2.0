<!-- pliki z opcją wyświetlania bazy danych -->

<?php
// wyświetl wszytkie informacje, które potrzebujemy

function showTickets(){
    $query="
        SELECT 
        z.*,
        zo.*,
        u.imie_user,
        u.nazwisko_user
        FROM
            zgloszenia as z
            JOIN zgloszenia_odpowiedzi as zo ON zo.id_zgloszenia = z.id
            JOIN users as u  ON zo.id_users = u.id
        ORDER BY z.priorytet_zgl desc, z.id
     ;";

}


