<!DOCTYPE html>
<html lang="en">
<head>
    <title>Funktionen für Arrays</title>
</head>
<body>
    <h1>Funktionen für Arrays</h1>
    <?php

    $namen = array("Peter", "Franziska", "Mario", "Katharina", "Franziska", "Christian", "Katharina", "Markus");

    //Elemente (Werte) in einem Array zählen
    echo count($namen);
    echo "<br>";

    //Zufällige Namen ausgeben
    $index = array_rand($namen); //Zufälligen Index erhalten und in Variable speichern
    echo $namen [$index]; //Index-Variable als Index verwenden

    // Doppelte Namen entfernen
    $eindeutig = array_unique($namen);
    echo count($eindeutig);
    echo "<br>";
    echo "<pre>";
    print_r( $eindeutig);
    echo "</pre>";
    echo "<br>";

    //Prüfen ob ein Wert im Array existiert

    echo ">". in_array("Heidi", $namen). "<";
    
    $i = in_array("Franziska", $namen);
    echo ">$i<";
    echo "<br>";

    if ($i) {
        echo "dieser Name existiert";
    } else {
        echo "dieser Name existiert nicht";
    }
    
    //Aufsteigend nach Namen sortieren
    asort($eindeutig);
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";
    echo "<br>";

    //Wert im Nachinein 
    $eindeutig[] = "Herbert";
    array_push($eindeutig, "Julia", "Fritz");
    echo "<pre>";
    print_r( $eindeutig );
    echo "</pre>";
    echo "<br>";

    //Sortieren und Indizies neu zuweisen
    sort ($eindeutig);
    echo "<pre>";
    print_r( $eindeutig);
    echo "</pre>";
    echo"<br>";
    
    





    ?>
    
</body>
</html>