<?php

// Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
// vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
// des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
// instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
// véhicule. 





function vitesse(){
    $voiture = array (
     array("Peugeot","Citroën"), 
    array("408","C4"), 
    array(5, 3) , 
    array(0,0));

    echo " info sur le vehicule <br>";
    foreach($voiture as $value =>$key){
        
        echo $key[1]. "<br>";
    }


}


echo vitesse();
?>