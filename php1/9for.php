<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-Schleifen</title>
</head>
<body>
    <h1>Schleifen</h1>
    <?php

    //1 - 10 in einer HTML Taballe darstellen.
    echo "<table border='1'>";
    for ($zeile=1; $zeile <=10; $zeile++) {
        //6te Zeile wird übersprungen
        if ($zeile == 6) continue;
        /*
            if ($zeile == 6)
            {
                continue;
            }
        */

            //Generiert die einzelnen Spalten
        echo "<tr>";
        for ($spalte=1; $spalte <=10; $spalte++) {
            echo "<td>";
            //jeder durch 7 teilbare 
            if ( $spalte * $zeile % 7 != 0) {
                echo $spalte * $zeile;
            }
          echo "</td>";
        
        }
        echo "</tr>";

}
echo "</table>";

    ?>
<br><br>

<table border="1">
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>...</td>
    </tr>
    <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>...</td>
    </tr>
    <tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
    </tr>
</table>
    
</body>
</html>