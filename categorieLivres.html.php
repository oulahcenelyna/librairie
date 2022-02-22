<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style/categorieLivresstyle.css">
    
    <title>La P'tite librairie</title>
  </head>
  <body>

    <!-- connexion à la base de données -->
    <?php
      require_once 'BD/login_librairie.php';
      require_once 'BD/connexion_librairie.php';

      

    ?>
   
   <!-- insertion de la barre de recherche et de la banière -->
    <?php include('layouts/nav-bar.php'); ?>
    <?php include('layouts/baniere.php'); ?>
    <!-- resultats si recherche effectuée  -->
    <?php include('resultatRecherche.php'); ?>
    <!-- carousel des catégories -->
    <?php include('layouts/categoriesListe.php'); ?>
    
    
   
    <!-- CATEGORIE informatique  -->
    <h2 id="7" class="ml-3 mt-3">Informatique</h2>
    <?php  //Préparation de la requête
      $query = "select image,auteur,titre,resume,ouvrages.idOuvrage,disciplines_ouvrages.idDiscipline
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'informatique'";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données


    
    ?>
    

    <!-- cartes de chaque livre en informatique -->
    <div class="row g-3 ">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      
      <?php
        }
      ?>
    </div>                
   
    
    <!-- CATEGORIE MATHS  -->
    <h2 id="1"class="ml-3 mt-3">Maths </h2>
    <?php  //Préparation de la requête
      $query = "select auteur,titre,image,resume,ouvrages.idOuvrage
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'mathematiques' LIMIT 4";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données

      
    ?>
    
    <!-- cartes de chaque livre en maths -->
    <div class="row g-3">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      
      <?php
        }
      ?>
    </div>   


    <!-- CATEGORIE Anglais  -->
    <h2 id="3" class="ml-3 mt-3" >Anglais</h2>
    <?php  //Préparation de la requête
      $query = "select image,auteur,titre,resume,ouvrages.idOuvrage
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'anglais'";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données
    
    ?>
    
    <!-- cartes de chaque livre en Anglais-->
    <div class="row g-3">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      <?php
        }
      ?>
    </div>  


    <!-- CATEGORIE langues vivantes  -->
    <h2 id="6" class="ml-3 mt-3">Langues vivantes</h2>
    <?php  //Préparation de la requête
      $query = "select image,auteur,titre,resume,ouvrages.idOuvrage
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'Langues Vivantes ' ";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données
    
    ?>
    
    <!-- cartes de chaque livre en langues vivantes -->
    <div class="row g-3">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      <?php
        }
      ?>
    </div>  


    <!-- CATEGORIE FRANCAIS  -->
    <h2 id="2" class="ml-3 mt-3">Français</h2>
    <?php  //Préparation de la requête
      $query = "select image,auteur,titre,resume,ouvrages.idOuvrage
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'français' LIMIT 4";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données
    
    ?>
    <!-- cartes de chaque livre -->
    <div class="row g-3">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      <?php
        }
      ?>
    </div>     
     


    <!-- CATEGORIE SVT  -->
    <h2 id="4" class="ml-3 mt-3">Sciences vie et terre</h2>
    <?php  //Préparation de la requête
      $query = "select image,auteur,titre,resume,ouvrages.idOuvrage
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'Sciences de la vie et terre'";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données
    
    ?> 
    <!-- cartes de chaque livre SVT -->
    <div class="row g-4">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      <?php
        }
      ?>
    </div> 



    <!-- CATEGORIE SPC  -->
    <h2 id="5" class="ml-3 mt-3">Sciences physique chimie</h2>
    <?php  //Préparation de la requête
      $query = "select image,auteur,titre,resume,ouvrages.idOuvrage
      from ouvrages,disciplines_ouvrages,disciplines 
      where ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage
      And disciplines_ouvrages.idDiscipline=disciplines.idDiscipline
      AND libelle like 'Sciences physique chimie'";

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données
    
    ?>
  
    <!-- cartes de chaque livre SPC -->
    <div class="row g-3">
      <?php
        while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
      ?>
      <?php include('layouts/cardLivre.php'); ?>
      <?php
        }
      ?>
    </div>
      
    
  
    <!-- FOOTER  -->
    <?php include('layouts/footer.php'); ?>
  </body>



  <!-- scripts  -->
  <script src="carousel/js/jquery-3.3.1.min.js"></script>
  <script src="carousel/js/popper.min.js"></script>
  <script src="carousel/js/bootstrap.min.js"></script>
  <script src="carousel/js/owl.carousel.min.js"></script>
  <script src="carousel/js/main.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
</html>
