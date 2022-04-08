<?php
 
 function Maconnexion($courielForm,$MotPasseForm){
	require '../BD/login_librairie.php';
	require '../BD/connexion_librairie.php';
    
    $query = "SELECT * From emprunteurs where adresseMail = '$courielForm' AND MotDePasse = '$MotPasseForm'";
	 
    //Execution de la requête
    $result = $conn->query($query);
   

    return $result;
}
?>