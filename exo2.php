<?php

// Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
// s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
// une fonction personnalisée.
// Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);


$capitales =array
("France"=>"Paris", 
"Allemagne"=> "Berlin", 
"USA"=> "Washington", 
"Italie"=> "Rome");



function afficherTableHTML($capitales){

ksort($capitales);// alphebetical sort

    echo "<table border='1'>
            <thead>
            <tr>
                <th> Pays </th>
                <th>Capitales</th>
            </tr>
            </thead>
            <tbody>";
    foreach($capitales as $value =>$key){ // $value country //$key =capitals
        // strtoupper uppercase
        echo "<tr>
            <td>".strtoupper($value)."</td>
            <td>".$key."</td>
        </tr>";
                    
    }
}

echo afficherTableHTML($capitales);

?>