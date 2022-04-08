<?php 
 
	function Inscription($nomForm,$prenomForm,$courielForm,$MotPasseForm){
		require '../BD/login_librairie.php';
		require '../BD/connexion_librairie.php';
		
		$query = "INSERT INTO emprunteurs (nom,prenom,adresseMail,motDePasse)
		VALUES ('$nomForm','$prenomForm','$courielForm','$MotPasseForm')";
	
		return $query;
	}
?>