<?php

    function CategorieOuvrage(){
        require '../BD/login_librairie.php';
        require '../BD/connexion_librairie.php';
        
        //Préparation de la requête
        $categorieLivreSelectionne=("SELECT disciplines_ouvrages.idDiscipline
        from disciplines,disciplines_ouvrages,ouvrages
        where disciplines.idDiscipline=disciplines_ouvrages.idDiscipline
        AND disciplines_ouvrages.idOuvrage=ouvrages.idOuvrage
        AND ouvrages.idOuvrage= ".$_GET['idOuvrage']);
        

        //Execution de la requête
        $result = $conn->query($categorieLivreSelectionne);
        if(!$result) die("Erreur fatale : categorie ");

        //Récupérer le resultat
        $rows = $result->num_rows; //Nombres de lignes de données
    

        return $result;
    }




?>