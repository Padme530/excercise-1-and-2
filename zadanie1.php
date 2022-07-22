<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
    <title>Zadanie 1 </title>


<h1> Witaj </h1>

<?php
echo "<h3>Rozwiązanie zadania 1</h3>";

//klasa PhoneKeyboardConverter zamieniająca liczby na litery i odwrotnie, jak na klawiaturze numerycznej telefonu
class PhoneKeyboardConverter {

    // funkcja zamieniająca litery na dane liczby
    function convertToNumeric()
    {
        $string = $_POST['tekst'];                 //pobieranie tekstu ze strony
        $exchange = array("0,");                   //zmienna - zmieniona na cyfry
        $search = array(" ");                      //zmienna - litery
        echo $string . " = " . " <br / >";        //wyświetlenie podanego tekstu


        for ($i = 97; $i < 123; $i++) {            //dla znaków kolejno od 97 do 123 (litery małe),
            $search[] = chr($i);                   //funkcja zwracająca ciąg znaków, określonych przez ASCII

        }

        //dla cyfr od 2 do 9 przypisz określone cyfry do danych liter, zwiększając kolejno według wzoru dla cyfr 7 i 9
        //$a, ($a * 10) + $a, ($a * 100) + ($a * 10) + $a, ($a * 1000) + ($a * 100) + ($a * 10) + $a,);
        //i dla pozostałych cyfr według wzoru:
        //$a, ($a * 10) + $a, ($a * 100) + ($a * 10) + $a);
        for ($a = 2; $a < 10; $a++) {
            if ($a == 7 || $a == 9)
                $w = array($a, ($a * 10) + $a, ($a * 100) + ($a * 10) + $a, ($a * 1000) + ($a * 100) + ($a * 10) + $a,);
            else
                $w = array($a, ($a * 10) + $a, ($a * 100) + ($a * 10) + $a);

            foreach ($w as $value) {
                $exchange[] = $value . ",";
                // echo $value."<br />";
            }
        }
        //zamień ciąg znaków na inny, określony wyżej; kolejno ciąg który ma zostać usunięty
        //;ciąg który ma zostać wstawiony, tekst w którym mają zostać wprowadzone zmiany
        $string2 = trim(str_replace($search, $exchange, $string), ",");

        echo $string2;                            //wyświetlenie wyniku
        echo "<br />";
        echo "<br />";

    }

    //funkcja zamieniająca podane liczby w określone litery
    function convertToString()
    {
        $numeric = $_POST['cyfry'];                 //pobieranie liczb ze strony
                                                    //np. 5,2,22,555,33,222,9999,66,444,55
        $numbers = explode(",", $numeric);  //funkcja explode biegnie po kolei poprzez podane liczby
        //var_dump($numbers);                       //i szuka wystąpienia argumentu, czyli przecinka - ","

        $string = "";
        $tab = array(                               //tablica przypisująca określonym liczbą kolejne litery alfabetu
            "0" => " ",
            "2" => "a",
            "22" => "b",
            "222" => "c",
            "3" => "d",
            "33" => "e",
            "333" => "f",
            "4" => "g",
            "44" => "h",
            "444" => "i",
            "5" => "j",
            "55" => "k",
            "555" => "l",
            "6" => "m",
            "66" => "n",
            "666" => "o",
            "7" => "p",
            "77" => "q",
            "777" => "r",
            "7777" => "s",
            "8" => "t",
            "88" => "u",
            "888" => "v",
            "9" => "w",
            "99" => "x",
            "999" => "y",
            "9999" => "z"


        );

        //dla każdych numerów jako numer przypisz zmienną $string do określonej litery
        foreach ($numbers as $number) {
            $string .= $tab[$number];

        }
        echo $numeric . " = " . "<br />";         //wyświetl podany ciąg liczb
        echo $string;                             //wyświetl wynik


    }

}
$view = new PhoneKeyboardConverter;
echo $view->convertToNumeric();                   //wyświetlenie funkcji convertToNumeric
echo "<br />";
echo $view->convertToString();                    //wyświetlanie funkcji convertToString
echo "<br />";
echo "<br />";
echo "Powrót do strony głównej";

?>

<form action="index.html" method="post" enctype="multipart/form-data">
<div>


    <label>

        <input type="submit" value="Wróć">
    </label>

</div>
</form>
<body>

