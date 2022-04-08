<?php
 require '../BD/login_librairie.php';
 require '../BD/connexion_librairie.php';
 require '../Modele/ConnexionModele.php';



if(isset($_POST['connecter']))
{	 
	
	// connexion : verification que le mot de passe correspond bien a l'email entré 
	 
	$courielForm = htmlspecialchars($_POST['courielFormConnexion']);
	$MotPasseForm = hash('sha256', htmlspecialchars($_POST['MotPasseFormConnexion']));
		
	$result = Maconnexion($courielForm,$MotPasseForm);

	if(!$result) die("Erreur fatale : requête");
	
	//initialisation du mot de passe
	$motPasse="dvsndqvhs";

	//  affecter le mot de passe de la base de donnée relié a l'adresse mail 
	while ($row = $result->fetch_assoc()) {

		$motPasse = $row['MotDePasse'];
		$idConnection = $row['idEmprunteur'];
	
	}
	
	//lancer la session apres que le mot de passe soit correct
	if  ($MotPasseForm === $motPasse) {
		session_start();
		$_SESSION['adresseMail'] = $courielForm;
		$_SESSION['emprunteur'] = $idConnection;
			
		header('Location:../Vue/categorieLivres.php');
	}
	else {
		?>
		<!-- alerte identidiants incorrectes -->
		<script language="javascript">
			alert(" adresse mail ou mot de passe incorrect");
			window.location="../index.php";
		</script>
		
		<?php
	}
	 
}
?>
