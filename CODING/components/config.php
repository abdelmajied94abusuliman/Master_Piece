<?php 

$serverHost = "localhost";
$userName = "root";
$password = "";
$dataBase = "aqaba_homes";
$dsn = "mysql:host=$serverHost;dbname=$dataBase";

try {
    $connect = new PDO($dsn, $userName, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Error : " . $error->getMessage();
}

?>