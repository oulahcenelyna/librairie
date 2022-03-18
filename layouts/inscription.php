<?php
 require_once '../BD/login_librairie.php';
 include_once '../BD/connexion_librairie.php';
if(isset($_POST['envoyer']))
{	 
	
	// enregistrement des informations dans la base de données
	 $nomForm = htmlspecialchars($_POST['nomForm']);
	 $prenomForm = htmlspecialchars($_POST['prenomForm']);
	 $courielForm = htmlspecialchars($_POST['courielFormInscription']);
	 $MotPasseForm = hash('sha256', htmlspecialchars($_POST['MotPasseFormInscription']));
	
	 // verification que l'email ne soit pas deja inscrite dans la base de donnée
	$query = "SELECT * From emprunteurs where adresseMail = '$courielForm'";
	
	
	//Execution de la requête
	$result = $conn->query($query);
	if(!$result) die("Erreur fatale : requête");
	
	//Récupérer le resultat
	$rows = $result->num_rows; //Nombres de lignes de données
	echo $rows;
	
	
	if ($rows === 1) {
		echo "l'adresse mail existe deja ";
	
	}
	if ($rows == 0){
		$query = "INSERT INTO emprunteurs (nom,prenom,adresseMail,motDePasse)
	 VALUES ('$nomForm','$prenomForm','$courielForm','$MotPasseForm')";
	 if (mysqli_query($conn, $query)) {
		echo " Vous avez bien été enregistré !";
	 } 
	}
	 
}
?>