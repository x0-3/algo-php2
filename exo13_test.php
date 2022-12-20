<?php
class Voiture {
  private $marque;
  private $modele;
  private $nbPortes;
  private $vitesseActuelle = 0;

  public function __construct($marque, $modele, $nbPortes) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbPortes = $nbPortes;
  }

  public function demarrer() {
    echo "Le vehicule {$this->marque} est demarrer <br>";
  }

  public function accelerer($vitesse) {
    $this->vitesseActuelle += $vitesse;
  }

  public function stopper() {
    $this->vitesseActuelle = 0;
    echo "Le véhicule {$this->marque} est a l'arrêt <br>";
    echo "Sa vitesse actuelle est de {$this->vitesseActuelle} km / h <br>";
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

echo "info vehicule 1 <br>";
echo "****************<br>";

// Créer une instance de la classe Voiture
$v1 = new Voiture("Peugeot", "408", 5);
// Afficher les informations de la$v1
$v1->afficherInformations();
// Démarrer la$v1
$v1->demarrer();
// Accélérer la$v1 de 30 km/h
$v1->accelerer(50);
$v1->getVitesseActuelle();

echo "<br>";

echo "info vehicule 2 <br>";
echo "****************<br>";

$v2 = new Voiture("Citroën","C4",3);
$v2-> afficherInformations();
$v2-> stopper();