<?php

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

Function getPlatsbyCategorie($cat,$conn)

{
    $query= $conn-> prepare("SELECT * FROM plat WHERE id_categorie=:id_categorie");
    $query-> bindParam(':id_categorie',$cat,PDO::PARAM_INT);
    $query-> execute();
    $platsByCat=$query-> fetchAll();
    return $platsByCat;

};

Function GetPlatsBySelect

Function PlatsByPopularity($conn)

{

    $requete = $conn -> query ("SELECT plat.id as id_plat, plat.libelle as libelle, plat.image AS image, plat.description AS description, sum(commande.quantite) AS quantite FROM plat JOIN commande ON plat.id = commande.id_plat GROUP BY plat.id ORDER BY SUM(commande.quantite) DESC LIMIT 3;");
    $requete-> execute();
    $PlatsPopu=$requete->fetchAll();
    return $PlatsPopu;
    
};