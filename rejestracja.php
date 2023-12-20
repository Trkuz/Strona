<?php

if (! filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    die("Email is invalid!"); #sprawdzanie czy email jest poprawny
}

if (strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters long"); #sprawdzanie czy hasło ma co najmniej 8 zjaków
}

if (!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one character"); #sprawdzanie czy haslo zawiera literę
}
if (! preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number");#sprawdzanie czy haslo zawiera cyfrę
}

if ($_POST["password"] !== $_POST["password_confirmation"]){ #sprawdzanie czy hasła się zgadzają
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT); #hashowanie hasła

$mysqli = require __DIR__ . "/baza.php"; #wymuszenie połącznia się z bazą

#wprowadznie ?domyślnych? danych do bazy:
$sql = "INSERT INTO user (name, mail, password_hash)
        VALUES (?, ?, ?)";
#zabezpiecznie przez SQL injection(sprawdzanie czy z SQL jest wszystko git):
$stmt = $mysqli ->stmt_init();

if (! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}

$stmt ->bind_param("sss",
                   $_POST["name"],
                   $_POST["mail"],
                   $password_hash);


#sprawdza błędy przy rejestracji
if($stmt->execute()){

    header("Location: good.html");
    exit;

} else{

    if ($mysqli ->errno === 1062){
        die("Istnieje już używkownik o takim adresie e-mail!");
    }else{
        die($mysqli ->error . " " . $mysqli ->errno);
    }
    
}




