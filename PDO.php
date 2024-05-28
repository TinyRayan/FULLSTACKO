<?php

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "TheDistrict";

try 

{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
}   catch(PDOException $e) 

{
    echo "Erreur de connexion à la base de données: " . $e->getMessage() ."<br>";
}


