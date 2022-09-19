<?php

$showAlert = false;
$showError = false;
$exists=false;



print_r($_SESSION);


$name = $_SESSION['name'];



require __PATH__.'/templates/admin/header.html.php';

require __PATH__.'/templates/default/profil.html.php';

require __PATH__.'/templates/admin/footer.html.php';


/*
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $gender = $_POST["gender"];
    $address_1 = isset ($_POST["address_1"]) ? $_POST['address_1']:'';
    $address_2 =isset ($_POST["address_2"]) ? $_POST['address_2']:'';
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];
    $domain_name = $_POST["domain_name"];
    $firm_name = $_POST["firm_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $cemail = $_POST["cemail"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $sql = "SELECT * FROM user where email='$email'AND last_name='$last_name' AND first_name='$first_name' AND gender='$gender'
            AND address_1='$address_1' AND address_2='$address_2' AND city='$city' AND zipcode='$zipcode' AND domain_name='$domain_name'
            AND firm_name='$firm_name' AND phone_number='phone_number'";
    $result = mysqli_query ($db, $sql) or die(mysqli_error($db));
    $num = mysqli_num_rows($result);

    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {

            $hash = password_hash($password,
                PASSWORD_DEFAULT);

            // Password Hashing is used here.
            $sql = "INSERT INTO `user` ( `email`, `password`, `created_at`, `last_name`, `first_name`, `gender`, `address_1`, `address_2`, `city`,
                                `zipcode`, `domain_name`, `firm_name`, `phone_number`)
            VALUES ('$email', '$hash', current_timestamp(), '$last_name', '$first_name', '$gender', '$address_1', '$address_2', '$city',
                    '$zipcode', '$domain_name', '$firm_name', '$phone_number')";

            $result = mysqli_query($db, $sql)or die(mysqli_error($db));

            if ($result) {
                $showAlert = true;
            }
        }
        else {
            $showError = "Passwords do not match";
        }
    }// end if

    if($num>0)
    {
      $exists="email not available";
  }

}//end if


if($showAlert) {

    echo ' <div class="alert alert-success
    alert-dismissible fade show" role="alert">

    <strong>Success!</strong> Your account is
    now created and you can login.
    <button type="button" class="close"
    data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div> ';
}

if($showError) {

    echo ' <div class="alert alert-danger
    alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '. $showError.'

    <button type="button" class="close"
    data-dismiss="alert aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div> ';
}

if($exists) {
    echo ' <div class="alert alert-danger
    alert-dismissible fade show" role="alert">

    <strong>Error!</strong> '. $exists.'
    <button type="button" class="close"
    data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div> ';
}


// Afaire ici la requette de recuperation des donénes des pays

// $sql_query_select_country = "SELECT * FROM country ORDER BY name ASC";
// $exec_requete = mysqli_query($db, $sql_query_select_country);

// $tab_countries = [];
// while ....(){
// $tab_countries[ $rows['id'] ] = $rows['name'];

// }

$tab_countries[1] = 'FRANCE';
$tab_countries[2] = 'ITALIE';
$tab_genders[1] = 'Un homme';
$tab_genders[2] = 'Une femme';

require __PATH__.'/templates/default/inscription.html.php';
*/
