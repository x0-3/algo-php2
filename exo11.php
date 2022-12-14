<?php

// Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
// chaîne de caractère représentant une date.




function formaterDateFr($date){

    //change french date format
    $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    $time= strtotime($date); //change value of the string to be a type time

    echo $dateFormat->format($time);//define the french format for the date $time

}

echo formaterDateFr("2018-02-23");
?>