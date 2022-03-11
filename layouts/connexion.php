<?php
 require_once '../BD/login_librairie.php';
 include_once '../BD/connexion_librairie.php';
 session_start();
if(isset($_POST['connecter']))
{	 
	 
	 $courielForm = htmlspecialchars($_POST['courielForm']);
	 $MotPasseForm = htmlspecialchars($_POST['MotPasseForm']);
	 $query = "SELECT COUNT(*) From emprunteurs where adresseMail = '$courielForm' AND motDePasse = '$MotPasseForm'";
	 //Execution de la requête
	 $result = $conn->query($query);
	 if(!$result) die("Erreur fatale : requête");
	 //Récupérer le resultat
	 $rows = $result->num_rows; //Nombres de lignes de données
	 echo $rows;
	 if ($rows = 1) {
		 $_SESSION['adresseMail'] = $courielForm;
	 }
}
?>
<!--  -->