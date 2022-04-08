<?php
 require '../BD/login_librairie.php';
 require '../BD/connexion_librairie.php';
  require '../Modele/user.php';



if(isset($_POST['connecter']))
{	 
	

	// connexion : verification que le mot de passe correspond bien a l'email entre 
	 
	 $courielForm = htmlspecialchars($_POST['courielFormConnexion']);
	 $MotPasseForm = hash('sha256', htmlspecialchars($_POST['MotPasseFormConnexion']));
	
	 
		
		$result = Maconnexion($courielForm,$MotPasseForm);

		

	 if(!$result) die("Erreur fatale : requête");
	 
	 
	 $motPasse="dvsndqvhs";
	 //  affecter le mot de passe de la base de donnée relié a l'adresse mail 
	 while ($row = $result->fetch_assoc()) {
		$motPasse = $row['MotDePasse'];
		$idConnection = $row['idEmprunteur'];
	}
	
	// print_r($result);
	//  echo $MotPasseForm;
	//  echo '<br>----';
	//  echo $motPasse;
	 if  ($MotPasseForm === $motPasse) {
		session_start();
		$_SESSION['adresseMail'] = $courielForm;
		$_SESSION['emprunteur'] = $idConnection;
		 
		 header('Location:../Vue/categorieLivres.php');
	 }else {
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
