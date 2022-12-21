<?php

// Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
// vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
// des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
// instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
// véhicule. 



class Voiture {
  private $marque;
  private $modele;
  private $nbPortes;
  private $vitesseActuelle;
  private $estdemarrer = false;

  public function __construct($marque, $modele, $nbPortes, $vitesseActuelle) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbPortes = $nbPortes;
    // $this->vitesseActuelle = $vitesseActuelle;
  }

  public function demarrer() {  
    if ($estdemarrer=true){
      echo "Le vehicule {$this->marque} est demarrer <br>";
    }else{
      stopper();
      echo "le vehicule {$this->marque} est a l'arrêt, demarrer la voiture <br>";
    }
  }

  public function accelerer($vitesse) {
    $this->vitesseActuelle += $vitesse;
    echo "Le véhicule {$this->marque} accélere de $vitesse km / h <br>";

  }

  public function stopper() {
    $this->vitesseActuelle = 0;
    echo "Le véhicule {$this->marque} est a l'arrêt <br>";
    echo "Sa vitesse actuelle est de {$this->vitesseActuelle} km / h <br>";

  }

  public function ralentir($vitesse){

    if($estdemarrer=true){
      $this->vitesseActuelle -= $vitesse;
      echo "Le véhicule {$this->marque} ralentie<br>";
      echo "La voiture ralentie de $vitesse km / h <br>";
    }else{
      
    }

  }

  public function getMarque() {
    return $this->marque;
  }

  public function setMarque($marque) {
    $this->marque = $marque;
  }

  public function getModele() {
    return $this->modele;
  }

  public function setModele($modele) {
    $this->modele = $modele;
  }

  public function getNbPortes() {
    return $this->nbPortes;
  }

  public function setNbPortes($nbPortes) {
    $this->nbPortes = $nbPortes;
  }

  public function getVitesseActuelle() {
    echo "Vitesse actuelle: " . $this->vitesseActuelle . " km/h<br>";
    return $this->vitesseActuelle;
  }

  public function afficherInformations() {
    echo "Nom et modèle du véhicule : " . $this->marque . " ". $this->modele . "<br>";
    echo "Nombre de portes: " . $this->nbPortes . "<br>";
  }
}


echo "info véhicule 1 <br>";
echo "****************<br>";

$v1 = new Voiture("Peugeot", "408", 5,"");

// Créer une instance de la classe Voiture
// Afficher les informations de la$v1
$v1->afficherInformations();

// Démarrer la $v1
$v1->demarrer();

// Accélérer la $v1 de 50 km/h
$v1->accelerer(50);
$v1->getVitesseActuelle();



echo "<br>";

$v2 = new Voiture("Citroën","C4",3,"");
echo "info véhicule 2 <br>";
echo "****************<br>";

// info $v2
$v2-> afficherInformations();
$v2-> stopper();//stop $v2

?>