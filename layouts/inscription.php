<?php
 require_once '../BD/login_librairie.php';
 include_once '../BD/connexion_librairie.php';
if(isset($_POST['envoyer']))
{	 
	 $nomForm = htmlspecialchars($_POST['nomForm']);
	 $prenomForm = htmlspecialchars($_POST['prenomForm']);
	 $courielForm = htmlspecialchars($_POST['courielForm']);
	 $MotPasseForm = hash('sha256', htmlspecialchars($_POST['MotPasseForm']));
	 $query = "INSERT INTO emprunteurs (nom,prenom,adresseMail,motDePasse)
	 VALUES ('$nomForm','$prenomForm','$courielForm','$MotPasseForm')";
	 if (mysqli_query($conn, $query)) {
		echo " Vous avez bien été enregistré !";
	 } 
}
?>