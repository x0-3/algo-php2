<?php

// Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
// valeurs en paramètre ("Monsieur","Madame","Mademoiselle").

$nomsRadio = array ("Monsieur", "Madame", "Mademoiselle");


function afficherRadio($nomsRadio){

    for($i=0; $i<count($nomsRadio); $i++){
       echo "<input type='radio' value ='$nomsRadio[$i]'>" .$nomsRadio[$i] ."<br>" ;


    }
}


afficherRadio($nomsRadio);

?>