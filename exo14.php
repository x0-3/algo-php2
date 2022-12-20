<?php

class voiture{
    private $marque;
    private $modèle;

    public function __construct($marque, $modèle)
    {
        $this ->marque=$marque;
        $this ->modèle=$modèle;
    }

    public function get_marque(){
        return $this->marque;
    }

    public function get_modèle(){
        return $this->marque;
    }

    public function getInfo(){
        echo "Le modele et la marque est : ". $this->marque ." ". $this->modèle;
    }
}

class VoitureElec extends voiture{
    public $autonomie;

    public function set_autonomie($autonomie)
    {
        $this->autonomie=$autonomie;
    }

    public function get_autonomie(){
        echo "a une autonomie de : " . $this->autonomie;
        return $this->autonomie;
    }
}


$v1= new voiture ("Peugeot","408");
$ve1= new VoitureElec ("BMW","I3",100);

echo $v1->getInfo()."<br>";
echo $ve1->getInfo()."<br>";
echo $ve1->get_autonomie()."<br>";

?>