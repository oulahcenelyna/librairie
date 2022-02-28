<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style/affichageLivresstyle.css">
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
  <!-- Recommendations basées sur ce livre -->
  <!-- requette pour recueillir la catégorie  -->
  <?php  //Préparation de la requête
 $categorieLivreSelectionne=("SELECT disciplines_ouvrages.idDiscipline
  from disciplines,disciplines_ouvrages,ouvrages
  where disciplines.idDiscipline=disciplines_ouvrages.idDiscipline
  AND disciplines_ouvrages.idOuvrage=ouvrages.idOuvrage
  AND ouvrages.idOuvrage= ".$_GET['idOuvrage']);
  
$vartest=2;
     
      //Execution de la requête
      $result = $conn->query($categorieLivreSelectionne);
      if(!$result) die("Erreur fatale : categorie ");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données


    
    ?>
   
    <?php 
        
         while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
          ?>
        
        <h1><?php
        $texte=$row['idDiscipline'];
        echo $row['idDiscipline']; ?></h1>

        <?php
         }
        ?>
  
  <?php  //Préparation de la requête
  
      $query = "SELECT * 
      FROM ouvrages,disciplines_ouvrages 
      WHERE ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage 
      AND disciplines_ouvrages.idDiscipline = $texte
      AND ouvrages.idOuvrage not like ".$_GET['idOuvrage']; 

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données


    
    ?>
    
  <h2>recommandé pour vous </h2>

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
<footer >footer</footer> 
     
</body>

</html>