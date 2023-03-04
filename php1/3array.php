<!DOCTYPE html>
<html lang="de">
<head>
    <title>Arrays in PHP</title>
</head>
<body>
<h1>Arrays in PHP</h1>    
    <?php 
    $namen = array("Katharina", "Jonathan", "Julia", "Peter");
    //Julia und Katharina
    echo $namen[2] . " und " . $namen[0];
    echo "<br>";
    echo "{$namen[2]} und {$namen[0]}";
    echo "<br>";

    //Wert im Nachinein an Array anhängen.
    $namen[] = "Mario";
    
    echo "<pre>";
    print_r($namen);
    echo "</pre>";

    //Index als Variable
    $x = 3;
    echo $namen[$x + 1];
    echo "<br>";

    //Assoziative Arrays definieren (Index ist ein Text)
    $personen = array(
        "name" => "Markus",
        "alter" => 63,
        "ort" => "Salzburg"
    );

    //Ausgabe: Markus (63) aus Salzburg

    echo $personen["name"];
    echo " (";
    echo $personen["alter"];
    echo ") ";
    echo " aus Salzburg";
    echo "<br>";
    echo $personen["name"] . "(" . $personen["alter"] . ") aus Salzburg";
    echo "<br>";

    //Im Nachinein einen Wert dem Array anfügen.
    $personen["guthaben"] = 180;

    //Inhalt aus Array darstellen (zu debuggin-zwecke!!!)
    echo "<pre>";
    print_r($personen);
    echo "</pre>";

    //Mehrdimensionale Array (verschachtelt) 
    $personenliste = array(
        array(
            "name" => "Herbert",
            "alter" => 33,
            "ort" => "Linz"
        ),
        array(
            "name" => "Sarah",
            "alter" => 27
        ),
        $personen

    );

    //LINZ
    echo $personenListe[0]["ort"];
    echo $personenListe[1]["name"];
    echo "<br>";

    echo "<pre>";
    print_r($personenListe);
    echo "</pre>";

    //Ändern von Array Werten
    $personenListe[0]["alter"] = 35,
    echo $personenListe[0]["alter"] = 35;
    echo "<br>";
    



    ?>
    
</body>
</html>