<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursy Walut NBP</title>
   <link rel="stylesheet" href="style/style.css">
</head>
<body>

<h1 style="text-align: center;">Aktualne Kursy Walut NBP</h1>

<table id="currencyTable">
    <thead>
        <tr>
            <th>Waluta</th>
            <th>Kurs (PLN)</th>
        </tr>
    </thead>
    <tbody>
        <!-- Wiersze z kursami walut będą tutaj wstawiane dynamicznie -->
    </tbody>
</table>

<script>
    // Waluty, które nas interesują
    const selectedCurrencies = ['EUR', 'USD', 'GBP', 'CHF', 'CAD', 'AUD', 'CNY'];

    // Pobieranie danych z API NBP
    fetch('https://api.nbp.pl/api/exchangerates/tables/A?format=json')
        .then(response => response.json())
        .then(data => {
            const rates = data[0].rates;  // Zawiera kursy walut

            // Filtrujemy kursy tylko dla wybranych walut
            const filteredRates = rates.filter(rate => selectedCurrencies.includes(rate.code));

            // Wstawiamy kursy do tabeli HTML
            const tableBody = document.querySelector('#currencyTable tbody');
            filteredRates.forEach(rate => {
                const row = `<tr>
                                <td>${rate.currency} -    (${rate.code})</td> 
                                <td>${rate.mid.toFixed(4)} PLN</td>
                             </tr>`;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => {
            console.error('Błąd przy pobieraniu danych z API NBP:', error);
        });
</script>

</body>
</html>
