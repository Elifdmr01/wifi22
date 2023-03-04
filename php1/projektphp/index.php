<?php

if (empty($_GET["seite"] ))
{
    $seite = "home";
} else {
    $seite = $_GET["seite"];
}

if ( $seite == "home") {
    $include_datei = "home.php";
} else if ($seite == "leistungen") {
    $include_datei = "leistungen.php";
} else if ($seite == "kontakt") {
    $include_datei = "kontakt.php";
} else if ($seite == "oeffnungszeiten") {
    $include_datei = "oeffnungszeiten.php";
} else {
    //404
    $include_datei = "error404.php";
}


//html blockweise wieder zusammensetzten
include "kopf.php";

include "inhalte/" . $include_datei;

include "fuss.php";