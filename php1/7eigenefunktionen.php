<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eigene Funktionen</title>
</head>
<body>
    <h1>Funktionen für Arrays</h1>
    <?php
    //Funktion zum Umrechnen von °C in °F
    //°F = °C * 1.8 + 32

    function celsius_in_fahrenheit($c) {
        $fahrenheit = $c * 1.8 + 32;
        return $fahrenheit;
    }

    //15°C
    echo celsius_in_fahrenheit(15);
    echo "<br>";
    echo celsius_in_fahrenheit(20);
    echo"<br>";
    echo celsius_in_fahrenheit(25);
    echo "<br>";
    echo celsius_in_fahrenheit(36);
    echo"<br>";
    echo celsius_in_fahrenheit(0);
    echo "<br>";
    echo celsius_in_fahrenheit(5);
    echo"<br>";
    echo celsius_in_fahrenheit(110);
    echo "<br>";


    //Datum neu formatieren
    function de_datum($datum_falsch){
        $year = substr($datum_falsch, 2, 2);
        $month = substr($datum_falsch, 5,2);
        $day = substr($datum_falsch, 8, 2);
        return $day ."." . $month . "." . $year;
       //return "$day.$month.$year";
        
    }

    $datum_mysql = "2022-04-17";
    //17.04.22
    echo de_datum($datum_mysql);
    echo "<br>";
   
    echo date("d.m.Y", strtotime($datum_mysql));
    echo "<br>";

    //Datum formatieren: 2. Variante
    //17.04.2022
    function de_datum2($datum_falsch){
        //explode
        $teile =  explode("-", $datum_falsch);
    return $teile[2] . "." . $teile[1]. "." . $teile[0];
        //return "$day.$month.$year";
    }

    echo de_datum2($datum_mysql);
    echo "<br>"; 

    //Text nach 10 Zeichen abschneiden und "..." anhängen
    function text_abschneiden($text, $lenght = 10) {

        if(strlen($text) > $lenght) {
            $text = substr($text, 0, $lenght) . " ...";
      
        }
        return $text;
    };
    echo text_abschneiden("Das ist ein Text ");
    echo "<br>";
    echo text_abschneiden("Hallo Welt");
        
    
 



    ?>
    
</body>
</html>