<?php


// En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
// complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
// « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
// Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
// de validation (submit).






function formulaire(){

    echo "<form>";
    //text form 
    $infoPersonnel = array ("nom", "prénom", "email", "ville", "sexe" );

    foreach($infoPersonnel as $value){
        

        echo "<p>$value<br><input type='text'> </p>";
        
    }


    //list form
    $Formation = array ("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet ");

    echo "intitulé de formation<br>";
    echo"<select>";
    for($i=0; $i<count($Formation); $i++){
        
        echo "<option value = '$Formation[$i]'>$Formation[$i]</option>";
    }
    echo"</select> <br>";


    //submit button
    echo "<br><input type='submit' value='Submit'>";
    echo "</form>";
}

echo formulaire();
?>