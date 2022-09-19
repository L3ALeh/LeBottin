<?php

function redirect($url)
{
    header('Location: '.$url);
}


function montableau()
{
    $html = '';

    for ($i=0; $i < 10; $i++) {
        // Demarre un buffer de stockage
        // Toutt ce qui suit n'est pas affiche
        ob_start();
        $var = $i;

        require 'templates/default/tableau.html.php';

        // Recupere la data dans le buffer et l'inject dans la variable
        $html .= ob_get_contents();

        // Supprimer ce qui est disponible dans le buffer sans l'afficher
        // CLEAN
        ob_end_clean();

    }
    return $html;
}
