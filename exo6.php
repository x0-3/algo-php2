<?php


// Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
// de valeurs.

$elements = array ("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements){


    echo "<select>";
    for($i=0; $i <count($elements); $i++){

        echo "<option value ='$elements[$i]'> $elements[$i]</option>";

    }

    echo "</select>";


}

echo alimenterListeDeroulante($elements);

?>