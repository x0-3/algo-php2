<?php

// Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
// dans le tableau associatif si la case est cochée ou non.


$elements = array ("choix 1", "choix 2", "choix 3");

function genererCheckbox($elements){

    for($i=0; $i< count($elements); $i++){
        echo "<input type ='checkbox' value=' $elements[$i]'> $elements[$i] <br>";

    }

}


echo genererCheckbox($elements);
?>