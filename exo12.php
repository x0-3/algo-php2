<?php

// La fonction var_dump($variable) permet d’afficher les informations d’une variable.




function valeur(){
    $tableauValeurs = array (true,"texte" , 10, 25.369, array("valeur1","valeur2"));
    // var_dump($tableauValeurs);

   foreach($tableauValeurs as $value=> $key){
        var_dump ($key);
        echo"<br>";
    } 
}

echo valeur();

?>