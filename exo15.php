<?php

// En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
// adresse e-mail a le bon format.


$emails = array('elan@elan-formation.fr', 'contact@elan' );

foreach ($emails as $value){
    if (filter_var($value, FILTER_VALIDATE_EMAIL)){
        echo "L’adresse $value est une adresse e-mail valide. <br>";
    }else{
        echo "L'adresse $value est une adresse e-mail invalide. <br>";
    }
}




?>