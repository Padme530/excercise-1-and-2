//funkcja welcomeUsers(array) o podanej strukturze, w którrej dla każdego elementu tablicy
//wypisuje do konsoli programistycznej łańcuch znaków zależny od danych danego obiektu
function welcomeUsers(array) {
    //alert - powitanie firmy eB2B
    /*let user= 'eB2B';

    function showMessage() {
        let message = 'Hello, ' + user;
        alert(message);
    }
    //wyświetlenie powitania
    showMessage();
    */
    //wypisanie tekstu message2 na stronie za pomocą  document.writeln(message2);
    const message2 = "Rozwiązanie zadania 2 - przejdź do konsoli!";
    document.writeln(message2);

    //stworzenie tablicy z określoną strukturą (nazwa użytkownika, rok urodzenia, pensja)
    var usersArr = [
        {userName: "Jan Kowalski", birthYear: 1986, salary: 4200},
        {userName: "Anna Nowak", birthYear: 1994, salary: 7500},
        {userName: "Jakub Jakubowski", birthYear: 1985, salary: 18000},
        {userName: "Piotr Kozak", birthYear: 2000, salary: 4999},
        {userName: "Marek Sinica", birthYear: 1989, salary: 7200},
        {userName: "Kamila Wiśniewska", birthYear: 1972, salary: 6800},
        {userName: "Michał Piotrowski", birthYear: 1975, salary: 6000},

    ];

    //dla każdego i=0, dla i mniejszy lub równy długość tablicy - 1, dodawaj po jeden od i=0 do i <= usersArr.length - 1
    for (var i = 0; i <= usersArr.length - 1; i++) {
        console.log(usersArr.length);

        //jeżeli pensja wynosi ponad 15000 wyświtl dany komunikat1
        //w przeciwnym wypadku dla pensji poniżej lub równej 5000 wyświtl komunikat2
        //w przeciwnym wypadku dla pensji ponad 5000 i z parzystym rokiem urodzenia wyświetl komunikat3
        //w innym wypadku wypisz komunikat4

        if (usersArr[i].salary >= 15000) {
            console.log("Witaj, prezesie!");                                                              //komunikat1
        } else if (usersArr[i].salary <= 5000) {
            console.log(usersArr[i].userName + ", szykuj się na podwyżkę!");                              //komunikat2
        } else if (usersArr[i].salary >= 5000 && usersArr[i].birthYear % 2 == 0) {
            var wiek = new Date().getFullYear() - usersArr[i].birthYear;
            console.log("Witaj, " + usersArr[i].userName + "! W tym roku kończysz " + wiek + " lat!");    //komunikat3
        } else {
            console.log(usersArr[i].userName + ", jesteś zwolniony! ");                                   //komunikat4

        }
    }
}
welcomeUsers();


