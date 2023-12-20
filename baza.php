<?php

#dane do łączenia z bazą danych:
$host = "localhost";
$dbname = "logowanie_db";
$username = "root";
$password = "";

#obiekt przekazujący dane:
$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

#sprawdzaenie czy nie wystąpiły błędy podczas łączenia z bazą:
if ($mysqli -> connect_errno){
    die("Connection error: " . $mysqli->connect_error);
}

#wyrzuca zmienna z błędem:
return $mysqli;