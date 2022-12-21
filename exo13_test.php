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
  private $estDemarrer;


  //function to set dif variables
  public function __construct($marque, $modele, $nbPortes, $vitesseActuelle=0,  $estDemarrer = false) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbPortes = $nbPortes;
  }


  //function to see if the car has started or not
  public function estDemarrer() {  

    if ($this->estDemarrer == true){
      echo "Le vehicule {$this->marque} est demarrer <br>";
    }else{
      echo "Le vehicule {$this->marque} n'est pas demarrer <br>";
    }

  }

  //function to start the car 
  public function demarrer(){
    if($this->estDemarrer){
      echo "le vehicule est déjà démarré <br>";
    }else{
      $this->estDemarrer = true;
      echo "la voiture démarre <br>";
    }
  }


  //function to change the speed with the help of "$vitesse" 
  public function accelerer($vitesse) {

    if($this->estDemarrer==true){
      $this->vitesseActuelle += $vitesse;
      echo "Le véhicule {$this->marque} accélere de $vitesse km / h <br>";
    }else{
      echo "Demarrer la voiture {$this->marque} avant d'accelerer <br>";
    }

  }


  //function if "$estDemarrer" is true than substract "$vitesse" from "$vitesseActuelle"
  // else write an error message
  public function ralentir($vitesse){

    if($this->estDemarrer==true){
      $this->vitesseActuelle -= $vitesse;
      echo "Le véhicule {$this->marque} ralentie<br>";
      echo "La voiture ralentie de $vitesse km / h <br>";
    }else{
      echo "Demarrer la voiture {$this->marque} avant de ralentir <br>";
    }

  }


  //function to stop the car and reset the initial speed 
  // else error message
  public function stopper() {

    if($this->estDemarrer==false){
      $this->vitesseActuelle = 0;
      echo "Le véhicule {$this->marque} est a l'arrêt <br>";
      echo "Sa vitesse actuelle est de {$this->vitesseActuelle} km / h <br>";
      $estDemarrer = false;
    }else{
      echo "ralentissez pour vous arreter";
    }

  }


  //function to get the brand of the car
  public function getMarque() {
    return $this->marque;
  }


  //function to set the brand of the car
  public function setMarque($marque) {
    $this->marque = $marque;
  }


  //function to get the model of the car
  public function getModele() {
    return $this->modele;
  }


  //function to set the model of the car
  public function setModele($modele) {
    $this->modele = $modele;
  }


  //function to get the number of doors of the car
  public function getNbPortes() {
    return $this->nbPortes;
  }


  //function to set the number of doors of the car
  public function setNbPortes($nbPortes) {
    $this->nbPortes = $nbPortes;
  }


  //function to get the initial speed of the car
  public function getVitesseActuelle() {
    echo "Vitesse actuelle: " . $this->vitesseActuelle . " km/h<br>";
    return $this->vitesseActuelle;
  }


  //function that shows us the basic info of the car (brand,model and the number of doors)
  public function afficherInformations() {
    echo "Nom et modèle du véhicule : " . $this->marque . " ". $this->modele . "<br>";
    echo "Nombre de portes: " . $this->nbPortes . "<br>";
  }

}

// info on the 1st car

echo "info véhicule 1 <br>";
echo "****************<br>";

$v1 = new Voiture("Peugeot", "408", 5,"");

$v1->afficherInformations();

$v1->demarrer();

$v1->accelerer(50);
$v1->getVitesseActuelle();

echo "<br>";

// info on the 2nd car
$v2 = new Voiture("Citroën","C4",3,"");
echo "info véhicule 2 <br>";
echo "****************<br>";

$v2-> afficherInformations();
$v2-> ralentir(5); 
$v2-> stopper(); 

?>