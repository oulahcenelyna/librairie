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
	

	 
	
	
	if ($rows === 1) {
		?>
			<script language="javascript">
			alert("l'adresse mail existe deja");
			window.location="../index.php";
			</script>
			
			<?php
	
	}
	if ($rows == 0){
		$query = "INSERT INTO emprunteurs (nom,prenom,adresseMail,motDePasse)
	 VALUES ('$nomForm','$prenomForm','$courielForm','$MotPasseForm')";
	 if (mysqli_query($conn, $query)) {

		// 
		$query = "SELECT * From emprunteurs where adresseMail = '$courielForm' AND MotDePasse = '$MotPasseForm'";
	 
		//Execution de la requête
		$result = $conn->query($query);
		if(!$result) die("Erreur fatale : requête");
		
		
		//  recupere l'id de l'emprunteur à l'inscription
		while ($row = $result->fetch_assoc()) {
		   
		   $idConnection = $row['idEmprunteur'];
	   }
	   ?>
			<script language="javascript">
			alert(" Vous avez bien été enregistré !");
			window.location="../Vue/categorieLivres.html.php";
			</script>
			
			<?php
		
		session_start();
		$_SESSION['adresseMail'] = $courielForm;
		$_SESSION['emprunteur'] = $idConnection;
		
		 
	 } 
	}
	 
}
?>