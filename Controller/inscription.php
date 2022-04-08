<?php
 require_once '../BD/login_librairie.php';
 include_once '../BD/connexion_librairie.php';
 require '../Modele/VerificationMailModele.php';
 require '../Modele/InscriptionModele.php';
 require '../Modele/ConnexionModele.php';

if(isset($_POST['envoyer']))
{	 
	
	// enregistrement des informations dans la base de données
	$nomForm = htmlspecialchars($_POST['nomForm']);
	$prenomForm = htmlspecialchars($_POST['prenomForm']);
	$courielForm = htmlspecialchars($_POST['courielFormInscription']);
	$MotPasseForm = hash('sha256', htmlspecialchars($_POST['MotPasseFormInscription']));

	$result =VerificationMailInscription($nomForm,$prenomForm,$courielForm,$MotPasseForm);


	//Récupérer le resultat
	$rows = $result->num_rows; //Nombres de lignes de données
	
	
	if ($rows === 1) {
		?>
		<script language="javascript">
			alert("l'adresse mail existe deja");

			//redirection vers l'index pour s'inscrire avec une nouvelle adresse mail
			window.location="../index.php";
		</script>
		
		<?php
	}

	if ($rows == 0){

		//Inscription du visiteur 
		$query = Inscription($nomForm,$prenomForm,$courielForm,$MotPasseForm);
	 	if (mysqli_query($conn, $query)) {

		$result = Maconnexion($courielForm,$MotPasseForm);
		
		//recupere l'id de l'emprunteur à l'inscription
		while ($row = $result->fetch_assoc()) 
		{
		   $idConnection = $row['idEmprunteur'];
	  	}

	   ?>
		<script language="javascript">
			alert(" Vous avez bien été enregistré !");
			window.location="../Vue/categorieLivres.php";
		</script>

		<?php
		//Lancement de la session une fois l'inscription terminée 
		session_start();
		$_SESSION['adresseMail'] = $courielForm;
		$_SESSION['emprunteur'] = $idConnection;
		
		 
	 } 
	}
	 
}
?>