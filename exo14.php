<?php

class voiture{
    public $marque;
    public $modèle;

    public function __construct($marque, $modèle,$autonomie)
    {
        $this ->marque=$marque;
        $this ->modèle=$modèle;
        $this ->autonomie=$autonomie;
    }

    public function get_marque(){
        return $this->marque;
    }

    public function get_modèle(){
        return $this->modèle;
    }

    public function getInfo(){
        echo "Le modele et la marque est : ". $this->marque ." ". $this->modèle . "<br>";
        echo "a une autonomie de : " . $this->autonomie;

    }
}

class VoitureElec extends voiture{
    public $autonomie;

    public function get_autonomie(){
        return $this->autonomie;
    }
}


$v1= new voiture ("Peugeot","408","");
$ve1= new VoitureElec ("BMW","I3",100);

echo $v1->getInfo()."<br>";
echo $ve1->getInfo()."<br>";

?>