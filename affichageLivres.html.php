<!-- partie pour rester  connecter tout le long des pages -->
<?php
session_start();
if (!isset($_SESSION['adresseMail'])){
  header('Location:./index.html.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style/affichageLivresstyle.scss">
    <title>Document</title>
  
</head>
<body>
    <!-- connexion à la base de données -->
    <?php
      require_once 'BD/login_librairie.php';
      require_once 'BD/connexion_librairie.php';
     

    ?>
    <!-- Insertion du header -->
    <?php include('layouts/header2.php'); ?>


    <!-- affichage du livre en question  -->



    <div class="container">
        <!-- Visualisations des details du livre  -->
        <?php include('layouts/partieLivre.php'); ?>   
        <!-- Etagere 3D -->
    <div class="etagere">
    <div class="shelf">
  <div class="top"></div>
  <div class="front"></div>
  <div class="back"></div>
  <div class="left-side"></div>
  <div class="right-side"></div>
    </div>
    
    <div class="resumeResponsive">

    <?php
     //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
     $query = "SELECT * FROM ouvrages WHERE idOuvrage = ".$_GET['idOuvrage'];
     //Tu éxécute la requête, et fait un affichage classique...
     
     //Execution de la requête
     $result = $conn->query($query);
     if(!$result) die("Erreur fatale : requête");

     //Récupérer le resultat
     $rows = $result->num_rows; //Nombres de lignes de données


     while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
            ?>
            <h2>Résumé </h2>
           <p> <?php 
           echo  $row['resume']; ?></p>
            <?php
             
                }
            ?>
    </div>
  <!-- Recommendations basées sur ce livre -->
  <?php include ('layouts/sqlRecomandation.php')?>
    
  <h2>Recommandé pour vous </h2>

  <div class="recommendations">
        <div class="row">
         <?php 
         
          while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
         include ('layouts/recomandationLivre.php');
          }
         ?>
        </div>
    </div>
</div>
<!-- FOOTER  -->
<?php include('layouts/footer.php'); ?>
     
</body>

</html>