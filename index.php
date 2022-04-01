<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/indexstyle.scss">
</head>
<body>
<div class="body">
		<!-- formulaire inscription -->
<div class="center">
<div class="formulaireInscription">
    <h1>Inscription </h1>
    <form method="post" action="Controller/inscription.php" >
		
		<input type="text" name="nomForm" required  placeholder="Nom">
	
	
		<input type="text" name="prenomForm" required  placeholder="Prenom">
		
		
		<input type="email" name="courielFormInscription" required  placeholder="Courriel">
	
		
		<input type="text" name="MotPasseFormInscription"required  placeholder="Mot de passe">
		
		<input type="submit" name="envoyer" value="Inscription">
	</form>
    </div>
	<div class="ligne"></div>
	<!-- Formulaire connexion -->
    <div class="formulaireConnexion">
    <h1>Connexion </h1>
    <form method="post" action="Controller/connexion.php">
      
		<input type="email" name="courielFormConnexion" required  placeholder="Courriel">
		
		
		<input type="text" name="MotPasseFormConnexion" required  placeholder="Mot de passe">
		
		<input type="submit" name="connecter" value="Connexion">
	</form>
    </div>
</div>
</div>
</body>
</html>