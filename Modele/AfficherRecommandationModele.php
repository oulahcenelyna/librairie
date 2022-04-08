<?php
    function AfficherRecommandation($IdDisciplineLivre){
        require '../BD/login_librairie.php';
        require '../BD/connexion_librairie.php';
        
        $query = "SELECT * 
        FROM ouvrages,disciplines_ouvrages 
        WHERE ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage 
        AND disciplines_ouvrages.idDiscipline = $IdDisciplineLivre
        AND ouvrages.idOuvrage not like ".$_GET['idOuvrage']; 
    
        //Execution de la requête
        $result = $conn->query($query);
        if(!$result) die("Erreur fatale : requête");
    
        //Récupérer le resultat
        $rows = $result->num_rows; //Nombres de lignes de données
       
    
        return $result;
    }

?>