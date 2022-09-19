<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'lebottin';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)           or die('could not connect to database');

// Refaire avec une class + PDO
// en singleton (1 seul instance a tout moment partout dans le project)
// permet d'avoir 1 seul connexion de base
// par user
