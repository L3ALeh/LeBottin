<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

define('__PATH__', realpath(dirname(__FILE__)));

//var_dump($_SERVER['REQUEST_URI']);
require 'class/utils.php';
require 'config/init.php';

// niveau 1
require(__PATH__.'/templates/default/head.html.php');

// ROUTER
$uri = explode('/', $_SERVER['REQUEST_URI'])[1];

switch ($uri) {
    case '':
        require 'modules/accueil.php';
        break;
    case 'inscription':
        require 'modules/inscription.php';
        break;

    case 'profil':
        require 'modules/profil.php';
        break;

    case 'admin':
        require 'modules/admin/index.php';
        break;

    default:

        $filename = explode('?', $uri)[0];
        require 'modules/'.$filename.'.php';


        break;
}

exit();
