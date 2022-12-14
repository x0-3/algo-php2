<?php


// Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
// précisant le nom des champs associés

$nomInput = array ("Nom","prénom","Ville");

function afficherInput($nomInput){

    foreach($nomInput as $value){
        
        echo "<form method='post'>

            <p>$value<br><input type='text'></p>
        
        </form>";


    }

}


echo afficherInput($nomInput);
?>
