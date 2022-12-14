<?php

// A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
// le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
// nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).


$capitales = array(
    "France"=>"Paris",
    "Allemagne"=> "Berlin", 
    "USA"=> "Washington", 
    "Italie" =>"Rome", 
    "Espagne"=> "Madrid",
);



function afficherTableHTML($capitales){

    ksort($capitales);

    echo "<table border= '1'>
            <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien Wiki</th>
            </tr>
            </thead>
            <tbody>";


    foreach($capitales as $value =>$key){
        
        echo "<tr>
            <td>". strtoupper ($value)."</td>",
            "<td>$key</td>
            <td><a href= https://fr.wikipedia.org/wiki/$key target=_'blank'>Lien</a></td>
        </tr>";
        
    }
}

echo afficherTableHTML($capitales);
?>