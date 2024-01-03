<?php

if (! filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    die("Email is invalid!"); #sprawdzanie czy email jest poprawny
}

if (strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters long"); #sprawdzanie czy hasło ma co najmniej 8 zjaków i wyświetlanie komunikatu jeżeli warunek nie jest spełniony
}

if (!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one character"); #sprawdzanie czy haslo zawiera literę...
}
if (! preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number");#sprawdzanie czy haslo zawiera cyfrę...
}

if ($_POST["password"] !== $_POST["password_confirmation"]){ #sprawdzanie czy hasła się zgadzają...
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT); #hashowanie hasła

$mysqli = require __DIR__ . "/baza.php"; #wymuszenie połącznia się z bazą

#wprowadznie wartości początkowych po do bazy(prepare statement - zabezpieczenie przed SQL injection):
$sql = "INSERT INTO user (name, mail, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli ->stmt_init(); #inicjalizacja obiektu

if (! $stmt->prepare($sql)){ #jeżeli alokacja obiektu sie nie uda to wyrzuca błąd i zanyka program
    die("SQL error: " . $mysqli->error);
}
#wprowadza faktyczne, podane przez użytkownika dane, do bazy danych 
$stmt ->bind_param("sss",
                   $_POST["name"],
                   $_POST["mail"],
                   $password_hash);


#sprawdza błędy przy rejestracji
if($stmt->execute()){

    header("Location: good.html"); #jeżeli nie ma błędów to przenosi do strony good.html
    exit; #zamyka obecnie istniejącą stronę

} else{

    if ($mysqli ->errno === 1062){ #sprawdza czy e-mail nie istnieje już w bazie danchh
        die("Istnieje już używkownik o takim adresie e-mail!"); #wyświetla komunikat o błędzie
    }else{
        die($mysqli ->error . " " . $mysqli ->errno);
    }
    
}




