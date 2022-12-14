<?php

//Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
//  caractère passée en argument en majuscules et en rouge.
// Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;


$texte="Mon texte en parametre";

function convertirMajRouge($texte){

    //if $texte egual "Mon texte en parametre" then set the color to red and change the font to uppercase
    if($texte== "Mon texte en parametre"){
        $texte= preg_replace('/([a-z])/i','<span style= "color:red;">\1</span>',$texte);
        echo strtoupper($texte);
    }
    else{ //else write the value that is stored inside $texte
        echo $texte;
    }

}

convertirMajRouge($texte);

?>