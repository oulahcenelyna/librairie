<!-- style du carousel des catégories -->
<link rel="stylesheet" href="carousel/css/owl.carousel.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="carousel/css/bootstrap.min.css">
<!-- Style -->
<link rel="stylesheet" href="carousel/css/style.css">


<!-- Cards catégories disponibles -->

<div class="p-3 pt-5 ">    


  <!-- Requete d'affichage de l'enssemble des catégories -->
  <?php  //Préparation de la requête
    $query = "SELECT libelle,idDiscipline,imageCat from disciplines ";

    //Execution de la requête
    $result = $conn->query($query);
    if(!$result) die("Erreur fatale : requête");

    //Récupérer le resultat
    $rows = $result->num_rows; //Nombres de lignes de données

  ?>

  <!-- carousel de catégories -->
  <div class="site-section bg-left-half mb-5">
    <div class="container owl-2-style">
      <!-- titre du carousel -->
      <h2 class=" py-5 ">Disciplines</h2>
      <div class="owl-carousel owl-2">
        <!-- integration de chaque catégorie au carousel -->
        <?php
          while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
        ?>
        <!-- affichage des images par catégories et leur nom avec lien hypertext -->
        <div class="media-29101">
          <a href="#<?php echo $row ['idDiscipline']; ?>"><div class="img-fluid"><?php echo '<img src="carousel/imageCat/'.$row['imageCat'].'"height="250px ">'; ?></div></a>
          <h3><a href="#<?php echo $row ['idDiscipline']; ?>"></a></h3>
        </div>
        <?php
          }
        ?>  
      </div>
    </div>
  </div>


</div>  

