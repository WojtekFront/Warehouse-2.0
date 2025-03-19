Celem zadania jest zaprojektowanie i zaimplementowanie aplikacji w języku PHP, która umożliwi zarządzanie historią zamówień, zapewniając intuicyjną obsługę dla wielu użytkowników. Projekt powinien być modularny, skalowalny i przygotowany do dalszego rozwoju, w tym późniejszej migracji na framework Laravel 11. Poniżej przedstawiono kluczowe wymagania i etapy realizacji:

1. Wymagania funkcjonalne:
- Rejestracja zdarzeń i konwersacja kontekstowa
- Użytkownik (klient) zgłasza zdarzenie, np. otrzymanie e-maila z zamówieniem.
- System umożliwia rozpoczęcie i prowadzenie konwersacji w ramach zgłoszonego zdarzenia, z zapisem historii wymiany informacji między użytkownikami.
- Implementacja mechanizmu przypisywania unikalnego identyfikatora do każdego zdarzenia w celu łatwego śledzenia.
2. Powiązanie zamówień z produktami
- Stworzenie mechanizmu mapowania zamówień na konkretne produkty dostępne w systemie.
- Baza danych powinna zawierać tabele produktów i zamówień z relacją wiele-do-wielu (np. zamówienie może dotyczyć wielu produktów, a produkt może być częścią wielu zamówień).
- Możliwość dodawania, edycji i usuwania powiązań między zamówieniami a produktami przez uprawnionych użytkowników.
3. Generowanie faktur
- Implementacja funkcjonalności generowania faktury na podstawie danych zamówienia (np. lista produktów, kwota, dane klienta).
- Faktura powinna być dostępna w formacie czytelnym dla użytkownika (np. PDF lub HTML) z opcją zapisu w systemie.
- Uwzględnienie podstawowych walidacji, takich jak sprawdzenie kompletności danych przed generowaniem dokumentu.
4. Migracja projektu na Laravel 11
- Po zakończeniu podstawowej implementacji w czystym PHP, projekt należy przepisać na framework Laravel 11.
- Wykorzystanie modeli Eloquent do zarządzania relacjami w bazie danych, trasowania (routing) oraz middleware do autoryzacji użytkowników.
- Zachowanie dotychczasowej logiki biznesowej z dostosowaniem do standardów i konwencji Laravela (np. kontrolery, widoki Blade).