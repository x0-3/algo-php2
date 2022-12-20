<!-- <?php

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

    function __construct($marque, $modele, $nbPortes,$vitesseActuelle,)
    {
        $this -> marque = $marque;
        $this -> modele = $modele;
        $this -> nbPortes = $nbPortes;
        $this -> vitesseActuelle = $vitesseActuelle;
    }

    function get_marque(){
        echo "Nom et modèle du véhicule : ";
        return $this -> marque;
    }

    function get_modele(){
        return $this -> modele;
    }

    function get_nbPortes(){
        echo "Nombres de Portes : ";
        return $this -> nbPortes;
    }

    function get_vitesseActuelle(){
        echo "Sa vitesse {$this->marque} actuelle est de : ";
        return $this -> vitesseActuelle;
    }

}

// ********************************************************** inheritance ********************************************** //
class marque extends voiture{
    function demarrer(){
        echo "Le vehicule {$this->marque} démarre <br>";
    }

    function accelerer(){

        // $this->vitesseActuelle = " 50 km / h";
        echo "Le véhicule {$this->marque} accélère de {$this->vitesseActuelle}";

    }

    function stopper(){
        echo "Le vehicule {$this->marque} est a l'arrêt <br>";
    }
}


// ************************************************ settings *************************************************** //
$v1 = new marque ("Peugeot ", " 408 ", " 5 ","");
$v2 = new marque ("Citroën ", " C4 ", " 3 ","");

echo $v1 ->demarrer();
echo $v1 ->accelerer() ."50 km / h <br>";

echo $v2 ->demarrer();
echo $v2 ->stopper();
echo $v2 ->accelerer() ."20 km / h <br>";

echo $v1 ->get_vitesseActuelle() ."0 km / h <br>";


echo "<br>";


// ***************************************************** car info part ********************************************* //

// ******************************************************* car nb 1 ************************************************ //

echo "info vehicule 1 <br> **********************<br>";

// echo "Nom et modèle du véhicule : ";
echo $v1-> get_marque() ;
echo $v1-> get_modele()."<br>";

// echo "Nombres de Portes : ";
echo $v1-> get_nbPortes()."<br>";

echo $v1-> demarrer() ;

echo $v1-> accelerer()."50 km / h <br>";

echo "<br>";


// ****************************************************** car nb 2 ********************************** //
echo "info vehicule 2 <br> **********************<br>";

// echo "Nom et modèle du véhicule : ";
echo $v2-> get_marque() ;
echo $v2-> get_modele()."<br>";

// echo "Nombres de Portes : ";
echo $v2-> get_nbPortes()."<br>";

echo $v2->stopper();

echo $v2-> get_vitesseActuelle()."0 km / h <br>";


?>