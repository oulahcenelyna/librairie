<?php

    function PartieLivre(){
        require '../BD/login_librairie.php';
        require '../BD/connexion_librairie.php';

        //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
        $query = "SELECT * FROM ouvrages WHERE idOuvrage = ".$_GET['idOuvrage'];
        //Tu éxécute la requête, et fait un affichage classique...
        
        //Execution de la requête
        $result = $conn->query($query);
        if(!$result) die("Erreur fatale : requête");

        //Récupérer le resultat
        $rows = $result->num_rows; //Nombres de lignes de données

        return $result;
    }




?>