
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Style/profilStyle.css">
    <meta charset="utf-8">
    <title>Profil </title>
  </head>
  <body>
  <header> 
    <a href="categorieLivres.html.php">
      <img class="retour" src="images/retour.png" alt="retour sur la page d'accueil">
    </a>
    <h1>Bienvenue</h1>
    <button class="boutonDeconnexion" >
      <a href="layouts/deconnexion.php">
        <img class="imgDeconnexion" src="images/deconnecter.png" alt="">
      </a>
    </button>
  </header>
    <!-- connexion à la base de données -->
    <?php
      require_once 'BD/login_librairie.php';

      // Connexion à la base
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error)  die("Erreur fatale : connexion");

      // Affichage des caractères accentués en utf8
      $query = "set names utf8";
      $result = $conn->query($query);
      if (!$result)  die("Erreur fatale : gestion des caractères");
      $idEmprunteurtest=$_SESSION['emprunteur'];
    ?>

    <!--Livre Réservé -->

    <?php  
    //Préparation de la requête 
    //Pour aficher dans la card du livre la debutEmprunt,finEmprunt,image,titre comme information 
     $query = "SELECT debutEmprunt,finEmprunt,image,titre,emprunteurs_exemplaires.idEmprunteur,emprunteurs_exemplaires.idExemplaire
     from emprunteurs_exemplaires,ouvrages,exemplaires
     where emprunteurs_exemplaires.idExemplaire=exemplaires.idExemplaire
     and exemplaires.idOuvrage=ouvrages.idOuvrage
     and emprunteurs_exemplaires.idEmprunteur=$idEmprunteurtest";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      
      //Récupérer le resultat
      //Nombres de lignes de données
      $rows = $result->num_rows;
    ?>
    

    <!-- toutes les reservations de l'utilisateurs connecté -->
    <div class="reservation">
      <?php
      //Si le nombre de réservation est différents de 0 alors 
      if ($rows !=0 ){
        echo "<h4 >Vos reservations</h4>";
        //Tant qu'il y a des réservations alors 
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
          
          // Afficher les cards des livres
          include 'layouts/cardLivreProfil.php';
        }
      }
      // Sinon Afficher Vous n'avez pas de reservation 
      else {
        echo "<h4 >Vous n'avez pas de reservations</h4>";
      }       
      ?>
    </div>   
  </body>
</html>
