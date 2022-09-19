<?php
session_start();
// pas d'erreur par default
$erreur = null;

if(isset($_POST['email'])&& isset($_POST['password']))
{
    $email = mysqli_real_escape_string($db, htmlspecialchars(trim($_POST['email'])));
    $password = mysqli_real_escape_string($db, htmlspecialchars(trim($_POST['password'])));

    if($email !== "" && $password !== "")
    {
        $sql_query_select_user = "SELECT count(*) FROM user where email = '".$email."' and password = '".md5($password)."' ";
        $exec_requete = mysqli_query($db, $sql_query_select_user);
        $response = mysqli_fetch_array($exec_requete);
        $count = $response['count(*)'];

        if($count != 0) {
            // nom d'utilisateur et mot de passe correctes
            $_SESSION['email'] = $email;
            redirect('/interface');
        } else {
            redirect('/connexion?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        $erreur = 2;
        //redirect('/connexion?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    //var_dump($_SESSION['email']);
}
// elle ce ferme auto en fin de script
//mysqli_close($db); // fermer la connexion

// Definir dans le module les variables utilise par le template
if (isset($_GET['erreur'])) {
    $erreur = $_GET['erreur'];
}

// A NE JAMAIS FAIRE
//$_GET['truc'] == 'nien';


require 'templates/default/connexion.html.php';
