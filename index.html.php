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
<div class="formulaireInscription">
    <h1>Inscription </h1>
    <form method="post" action="layouts/inscription.php">
		Nom:<br>
		<input type="text" name="nomForm">
		<br>
		Prenom:<br>
		<input type="text" name="prenomForm">
		<br>
		Couriel:<br>
		<input type="email" name="courielForm">
		<br>
		Mot de Passe:<br>
		<input type="text" name="MotPasseForm">
		<br><br>
		<input type="submit" name="envoyer" value="submit">
	</form>
    </div>
    <div class="formulaireConnexion">
    <h1>Inscription </h1>
    <form method="post" action="layouts/connexion.php">
        Couriel:<br>
		<input type="email" name="courielForm">
		<br>
		Mot de Passe:<br>
		<input type="text" name="MotPasseForm">
		<br><br>
		<input type="submit" name="connecter" value="submit">
	</form>
    </div>
</body>
</html>