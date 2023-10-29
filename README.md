# Wypozyczalnia-Samochodow

Założenia projektu “Wypożyczalnia samochodów”:
Możliwość wypożyczania samochodów przez konkretnego użytkownika (tylko z poziomu pracownika)
Trzy typy kont użytkowników – administrator, workerOfRental, user

administrator:
Może przeglądać listę administratorów oraz pracowników
Konta administratora i workera tworzy i usuwa administrator

workerOfRental:
	Pracownik wypożyczalni może sprawdzać listę użytkowników
W ten sposób konto administratora ogranicza się jedynie do tworzenia kont pracowniczych i nie będzie nadużywane do nieznacznych poprawek
	Może również tworzyć i usuwać konta użytkownika
	W razie potrzeby administrator może utworzyć konto workera również dla siebie aby wspomagać administrowanie samochodami i userami
	Może dodawać i usuwać samochody z wypożyczalni (tabela cars)
	Może sprawdzać aktualnie wypożyczone samochody oraz kto je wypożyczył
	Może dodawać i usuwać wypożyczenia

User:
	Może sprawdzać aktualny stan samochodów w wypożyczalni, widzieć które samochody posiada wypożyczalnia oraz czy są aktualnie dostępne
	Sprawdzić swoje wypożyczone samochody oraz kiedy jest termin zwrotu
