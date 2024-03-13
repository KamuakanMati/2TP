x = int(input("Podaj liczbę do sprawdzenia: "))

def czy_liczba_pierwsza(liczba):
    if liczba < 2:
        return False
    for i in range(2, int(liczba**0.5) + 1):
        if liczba % i == 0:
            return False
    return True 

if czy_liczba_pierwsza(x):
    print(f"{x} jest liczbą pierwszą.")
else:
    print(f"{x} nie jest liczbą pierwszą.")