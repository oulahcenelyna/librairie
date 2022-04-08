<?php 
 
	function VerificationMailInscription($nomForm,$prenomForm,$courielForm,$MotPasseForm){
		require '../BD/login_librairie.php';
		require '../BD/connexion_librairie.php';
		
		// verification que l'email ne soit pas deja inscrite dans la base de donnée
		$query = "SELECT * From emprunteurs where adresseMail = '$courielForm'";
		
		//Execution de la requête
		$result = $conn->query($query);
		
		return $result;
	}
?>