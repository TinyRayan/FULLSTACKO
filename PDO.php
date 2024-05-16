<?php

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "TheDistrict";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
}   catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage() ."<br>";
}


/*---------------------------- TOUTES MES FONCTIONS ----------------------------*/

Function GetCategories($conn) 

{
    $requete = $conn -> query('SELECT `id_categorie` , `libelle` , `image` , `active` FROM categorie WHERE active = 1');
    $categories = $requete -> fetchAll(PDO::FETCH_OBJ);
    $requete -> closeCursor();
    return $categories;   
}

Function GetPlats($conn)

{
    $requete = $conn -> query ('SELECT * FROM plat WHERE active = 1');
    $plats = $requete -> fetchAll(PDO::FETCH_OBJ);
    $requete -> closeCursor();
    return $plats;
}



?>