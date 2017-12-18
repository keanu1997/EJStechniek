<?php

/*
1. check of request een post request is (via form)
2. check of de benodigde waardes aanwezig zijn
3. gegevens valideren
4. rekensom uitgvoeren
5. resultaat returnen
*/

/* ===== VARIABLE ===== */
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

/* ===== FUNCTIONS ==================== */
function validatePostRequest($request_method, $redirect_url) {
    if ( $request_method == 'POST') {
        return true;
    } else {
        header('location:'. $redirect_url);
        die();
    }
}
function checkValues ($name, $email, $message) {
    if ( !empty($name) && !empty($email) && !empty($message) ) {
        return true;
    } else {
        return false;
    }
}

/* VARIABLE */
$checkReguest = validatePostRequest($_SERVER['REQUEST_METHOD'], 'index.html');
$checkValues = checkValues($name ,$email ,$message );


// 1. check of request een post request is...
if ($checkReguest) {

    // 2. check of de benodigde waardes aanwezig zijn
    if ($checkValues) {
        echo 'Dank u wel, u krijgt zo spoedig mogelijk antwoord. <a href="index.php"> Ga terug</a>';
        $msg = "Naam: $name
        \r\nE-mail: $email
        \r\nBedrijf: $company
        \r\nOnderwerp: $subject
        \r\nBericht: $message";
        mail("info@ejs-techniek.nl",$subject ,$msg);
    } else {
        echo 'U heeft niet alle velden ingevuld <a href="index.php"> Ga terug</a>';
        die();
    }
}