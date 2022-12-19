<?php

// Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
// vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
// des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
// instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
// véhicule. 



class voiture
{
    public $marque;
    public $modele;
    public $nbPortes;
    public $vitesseActuelle;

    function __construct($marque, $modele, $nbPortes,)
    {
        $this -> marque = $marque;
        $this -> modele = $modele;
        $this -> nbPortes = $nbPortes;
    }
    function get_marque(){
        return $this -> marque;
    }

    function get_modele(){
        return $this -> modele;
    }

    function get_nbPortes(){
        return $this -> nbPortes;
    }


    

    function get_demarrer(){
        return $this -> vitesseActuelle;
    }
    function get_accelerer(){
        return $this -> vitesseActuelle;
    }
    function get_stopper(){
        return $this -> vitesseActuelle;
    }

}


// car nb 1
$v1 = new voiture ("Peugeot ", " 408 ", " 5 ");

echo "info vehicule 1 <br> **********************<br>";

echo "Nom et modèle du véhicule : ";
echo $v1-> get_marque() ;
echo $v1-> get_modele()."<br>";

echo "Nombres de Portes : ";
echo $v1-> get_nbPortes()."<br>";





// echo "<br>";

// // car nb 2
// $v2 = new voiture ("Citroën ", " C4 ", " 3 ");

// echo "info vehicule 2 <br> **********************<br>";

// echo "Nom et modèle du véhicule : ";
// echo $v2-> get_marque() ;
// echo $v2-> get_modele()."<br>";

// echo "Nombres de Portes : ";
// echo $v2-> get_nbPortes()."<br>";


?>