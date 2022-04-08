<?php

    function DetailReservation($idEmprunteurtest){
        require '../BD/login_librairie.php';
        require '../BD/connexion_librairie.php';
        
        //Pour aficher dans la card du livre la debutEmprunt,finEmprunt,image,titre comme information 
        $query = "SELECT ouvrages.idOuvrage, debutEmprunt,finEmprunt,image,titre,emprunteurs_exemplaires.idEmprunteur,emprunteurs_exemplaires.idExemplaire
        from emprunteurs_exemplaires,ouvrages,exemplaires
        where emprunteurs_exemplaires.idExemplaire=exemplaires.idExemplaire
        and exemplaires.idOuvrage=ouvrages.idOuvrage
        and emprunteurs_exemplaires.idEmprunteur=$idEmprunteurtest";
    
        //Execution de la requête
        $result = $conn->query($query);
        if(!$result) die("Erreur fatale : requête");

        
        //Récupérer le resultat
        
    

        return $result;
    }




?>