<?php

// Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
// Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.

$url =  '<img src="http://my.mobirise.com/data/userpic/764.jpg"/>';



function repeterImage($url){
    $nb=4;

    for($i=0; $i<$nb;$i++){
        echo $url ;
    }

}

repeterImage($url);

?>